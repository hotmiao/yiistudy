<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>table模块快速使用</title>
    <link rel="stylesheet" href="/assets/layui/css/layui.css" media="all">
</head>
<body>
<div class="layui-main" style="padding-left: 10px; padding-right: 10px; width: 100%;">
    <table id="employee_list" lay-filter="employee_filter"></table>
</div>

<script src="/assets/layui/layui.js"></script>

<script type="text/html" id="operationTpl">
    <!-- 这里的 checked 的状态只是演示 -->
    <a href="javascript:;" lay-event="edit"><i class="layui-icon" style="font-size: 16px; color: #888;">&#xe642;</i></a>
    &nbsp;
    <a href="<?= \yii\helpers\Url::toRoute('employee/delete') ?>" lay-event="del"><i class="layui-icon" style="font-size: 16px; color: #888;">&#xe640;</i></a>
</script>

<script>
    layui.use('table', function(){
        var table = layui.table;

        //第一个实例
        table.render({
            elem: '#employee_list'
//            ,height: 315
            ,url: '<?= \yii\helpers\Url::toRoute('employee/members') ?>' //数据接口
            ,page: true //开启分页
            ,cols: [[ //表头
                {field: 'id', title: 'ID', sort: true, fixed: 'left'}
                ,{field: 'username', title: '用户名'}
                ,{field: 'gender', title: '性别', sort: true}
                ,{field: 'tel', title: '电话'}
                ,{field: 'enroll_date', title: '入职时间', sort: true}
                ,{field:'operation', title:'操作', templet: '#operationTpl', unresize: true}
            ]]
        });

        //监听工具条
        table.on('tool(employee_filter)', function(obj){
            var data = obj.data;
            if(obj.event === 'detail'){
                layer.msg('ID：'+ data.id + ' 的查看操作');
            } else if(obj.event === 'del'){
                layer.confirm('真的删除行么', function(index){
                    obj.del();
                    layer.close(index);
                });
            } else if(obj.event === 'edit'){
//                layer.alert('编辑行：<br>'+ JSON.stringify(data))
                $.post('<?= \yii\helpers\Url::toRoute('employee/edit') ?>', {'id': data.id}, function(str){
                    layer.open({
                        type: 1,
                        content: str //注意，如果str是object，那么需要字符拼接。
                    });
                });
            }
        });

    });
</script>
</body>
</html>