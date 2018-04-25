define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'express/reserve/index',
                    add_url: 'express/reserve/add',
                    edit_url: 'express/reserve/edit',
                    del_url: 'express/reserve/del',
                    multi_url: 'express/reserve/multi',
                    table: 'express_reserve',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id')},
                        {field: 'user_id', title: __('User_id')},
                        {field: 'send_name', title: __('Send_name')},
                        {field: 'send_mobile', title: __('Send_mobile')},
                        {field: 'send_address', title: __('Send_address')},
                        {field: 'receive_name', title: __('Receive_name')},
                        {field: 'receive_mobile', title: __('Receive_mobile')},
                        {field: 'receive_address', title: __('Receive_address')},
                        {field: 'goods_type', title: __('Goods_type')},
                        {field: 'goods_weight', title: __('Goods_weight'), operate:'BETWEEN'},
                        {field: 'remark', title: __('Remark')},
                        {field: 'createtime', title: __('Createtime'), operate:'RANGE', addclass:'datetimerange'},
                        {field: 'updatetime', title: __('Updatetime'), operate:'RANGE', addclass:'datetimerange'},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});