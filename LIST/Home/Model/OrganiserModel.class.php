<?php
/**
 * Created by PhpStorm.
 * User: 风雨雾凇
 * Date: 2016/11/11
 * Time: 17:05
 */
namespace Home\Model;

use Think\Model;

class OrganiserModel extends Model
{
    /*
     * 添加员工
     * name 姓名
     * position 现任职位
     * summary 个人简介
     * motto 座右铭
     * grade 年级
     * sex 性别
     * class 班级
     * major 专业
     */
    public function addOrganiser($name, $positon, $summary, $motto, $grade, $sex, $class, $major)
    {
        $key = $grade;
        $chinese=new \Org\Util\ChineseSpell();
        $spell=iconv("UTF-8","gb2312",$name);
        $key.=$chinese->getFullSpell($spell);
        $or = M('Organiser');
        $add = array(
            'key' => $key,
            'name' => $name,
            'position' => $positon,
            'summary' => $summary,
            'motto' => $motto,
            'grade' => $grade,
            'sex' => $sex,
            'class' => $class,
            'major' => $major
        );
        $or->add($add);
    }
    public function delOrganiser($key){
        $map['key']=$key;
        $or=M("Organiser");
        $or->where($map)->delete();
    }
}