<?php

namespace app\admin\controller;

use think\Controller;
use Casbin\Enforcer;
use CasbinAdapter\DBAL\Adapter as DatabaseAdapter;
use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\DriverManager;
use Casbin\Model\Model;
use Kuiba\kuibaAdmin\Facade\Tool;

class Page extends Controller
{

   public function index()
   {
      dump(Tool::getEnv('DATABASE.name'));
      // $e = $this->getEnforcer();
      // halt($e->enforce('eve', 'data3', 'read'));
      // return view();
   }
   public function colorselect()
   {
      return view();
   }
   public function editor()
   {
      return view();
   }
   public function form()
   {
      return view();
   }
   public function formstep()
   {
      return view();
   }
   public function icon()
   {
      return view();
   }
   public function iconpicker()
   {
      return view();
   }
   public function layer()
   {
      return view();
   }
   public function login1()
   {
      return view();
   }
   public function login2()
   {
      return view();
   }
   public function menu()
   {
      return view();
   }
   public function setting()
   {
      return view();
   }
   public function table()
   {
      return view();
   }
   public function tableselect()
   {
      return view();
   }
   public function upload()
   {
      return view();
   }
   public function userpassword()
   {
      return view();
   }
   public function usersetting()
   {
      return view();
   }
   public function welcome1()
   {
      return view();
   }
   public function welcome2()
   {
      return view();
   }
}