<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    //管理员显示页面
    public function index()
    {
        $this->display();
    }

    //添加员工页面
    public function add()
    {
        $this->display();
    }

    /*
     * 添加员工接口
     * name 姓名
     * position 现任职位
     * summary 个人简介
     * motto 座右铭
     * grade 年级
     * sex 性别
     * class 班级
     * major 专业
     * 返回
     * 1 所填信息为空
     * 200 添加成功
    */
    public function apiAdd()
    {
        $name = I('post.name');
        $position = I('post.position');
        $summary = I('post.summary');
        $motto = I('post.motto');
        $grade = I('post.grade');
        $sex = I('post.sex');
        $class = I('post.class');
        $major = I('post.major');
        $birthday = I('post.birthday');
        if ($name == '' || $position == '' || $summary == '' || $grade == '' || $sex == '' || $class == '' || $major == '' || $birthday == '') {
            $res = array(
                'Status' => 1,
                'Mes' => "所填信息不能为空！"
            );
            $this->ajaxReturn($res);
        } else {
            $or = D('Organiser');
            $or->addOrganiser($name, $position, $summary, $motto, $grade, $sex, $class, $major, $birthday);
            $res = array(
                'Status' => 200,
                '$Mes' => "添加成功！"
            );
            $this->ajaxReturn($res);
        }
    }

    /*
     * 删除员工接口
     * key  唯一kei值
     * 返回
     * 1    所填信息不能为空
     * 200  删除成功
    */
    public function apiDel()
    {
        $key = I("post.key");
        if ($key == '') {
            $res = array(
                'Status' => 1,
                'Mes' => "所填信息不能为空！"
            );
            $this->ajaxReturn($res);
        } else {
            $or = D('Organiser');
            $or->delOrganiser($key);
            $res = array(
                'Status' => 200,
                '$Mes' => "删除成功！"
            );
            $this->ajaxReturn($res);
        }
    }

    //获取员工数据接口
    public function apiGet()
    {
        $or = D('Organiser');
        $data = $or->getOrganiser();
        $res = array(
            'Data' => $data,
            'Mes' => '查询成功！',
        );
        $this->ajaxReturn($res);
    }
}