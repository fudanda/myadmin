<?php

namespace app\admin\controller;

use think\Controller;
use Kuiba\kuibaAdmin\facade\Casbin;
use kuiba\kuibaAdmin\facade\Tool;

class Page extends Controller
{

   public function index()
   {

      $e = Casbin::Enforcer();
      halt($e->getAllSubjects());
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