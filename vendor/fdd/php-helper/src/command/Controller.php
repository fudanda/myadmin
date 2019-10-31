<?php

namespace Kuiba\kuibaAdmin\command;

use think\console\Input;
use think\console\input\Argument;
use think\console\Output;
use kuiba\kuibaAdmin\Tool;

class Controller extends \think\console\Command
{

    protected $type = 'controller';
    protected function configure()
    {
        $this->setName('add:con')
            ->addArgument('name', Argument::OPTIONAL, "your name")
            // ->addOption('city', null, Option::VALUE_REQUIRED, 'city name')
            ->setDescription('make:life');
    }

    protected function execute(Input $input, Output $output)
    {
        $tool = new Tool;
        $name = trim($input->getArgument('name'));
        $className = $tool->getClassName($name, $this->type);
        //控制器路径
        $Path = $tool->getPathName($className);

        // 创建controller
        if (is_file($Path)) {
            $output->writeln($Path . ' already exists!');
        } else {
            if (!is_dir(dirname($Path))) {
                mkdir(dirname($Path), 0755, true);
            }
            file_put_contents($Path, $this->build($className));
            $output->writeln($this->controller . ' Creating  successful!');
        }
    }

    protected function getStub()
    {
        $stubPath = file_build_path(__DIR__, 'stubs', '' . $this->controller . '.stub');
        return $stubPath;
    }


    protected function build($name)
    {
        $stub = file_get_contents($this->getStub());

        $namespace = trim(implode('\\', array_slice(explode('\\', $name), 0, -1)), '\\');

        $namespace_new = trim(implode('\\', array_slice(explode('\\', $namespace), 0, 2)), '\\');

        $class = str_replace($namespace . '\\', '', $name);

        $data_field = cc_format($class);

        return str_replace(['{%className%}', '{%namespace%}', '{%data_field%}'], [
            $class,
            $namespace,
            $data_field,
        ], $stub);
    }
}