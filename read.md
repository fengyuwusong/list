安装说明
    =>修改LIST->Common->conf->config.php下的数据库用户名和密码
    =>新建list数据库
    =>导入list.sql文件
    =>安装成功
页面介绍
    首页控制台 展示员工页
        url=>localhost/list/index.php/home/index/index

接口说明
    添加员工接口
        url
            =>'{:U('Home/index/apiAdd')}'
        参数
            必须=>
                name    => 员工姓名
                position=> 目前职位
                summary => 个人简介
                grade   => 所在年级
                sex     => 性别
                class   => 班级
                major   => 专业
                birthday=> 生日 时间戳
            可选=>
                motto   => 座右铭
        返回
            1=>
                {
                  "Status": 1,
                  "Mes": "所填信息不能为空！"
                }
            2=>
                {
                  "Status": 200,
                  "$Mes": "添加成功！"
                }
        Status
            1   =>所填信息不能为空！
            200 =>添加成功！
    删除员工接口
        url
            =>"{:U('Home/index/apiDel')}"
        参数
            必须=>
                key =>员工唯一key值 年级+姓名全拼 例如2015qiangbaobao
        返回
            1=>
                {
                  "Status": 1,
                  "Mes": "所填信息不能为空！"
                }
            2=>
                {
                  "Status": 200,
                  "$Mes": "删除成功！"
                }
            Status
                1   =>所填信息不能为空！
                200 =>删除成功！
    查询所有员工接口
        url
            =>"{:U('Home/index/apiGet')}"
        参数
            无
        返回
            {
              "Data": [
                {
                  "key": "2015qiangbaobao",
                  "name": "强宝宝",
                  "grade": "2015",
                  "sex": "男",
                  "class": "2",
                  "major": "软件工程",
                  "summary": "没有",
                  "motto": "",
                  "position": "顾问",
                  "birthday": "1478961923"
                }
              ],
              "Mes": "查询成功！"
            }