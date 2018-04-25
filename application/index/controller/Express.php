<?php

namespace app\index\controller;

use app\admin\model\ExpressAddress;
use app\common\controller\Frontend;
use app\common\library\Token;
use think\Validate;

class Express extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = 'default';

    public function _initialize()
    {
        parent::_initialize();
    }

    public function index()
    {
        return $this->view->fetch();
    }

    public function news()
    {
        $newslist = [];
        return jsonp(['newslist' => $newslist, 'new' => count($newslist), 'url' => 'https://www.fastadmin.net?ref=news']);
    }

    /**
     * 地址管理
     */
    public function address()
    {
        $list = ExpressAddress::order('createtime desc')->paginate(10);
        $this->view->assign('title', '地址管理');
        $this->view->assign('list', $list);
        return $this->view->fetch();
    }

    /**
     * 地址添加
     */
    public function address_add()
    {
        if ($this->request->isPost()) {
            $name = $this->request->post("name");
            $mobile = $this->request->post("mobile");
            $city = $this->request->post("city");
            $address = $this->request->post("address");
            $is_default = $this->request->post("is_default");
            $token = $this->request->post('__token__');

            $rule = [
                'name'  => 'require',
                'mobile'    => 'regex:/^1\d{10}$/',
                'city'  => 'require',
                'address'     => 'require',
                '__token__' => 'token',
            ];
            $msg = [
                'name.require' => '姓名不能为空',
                'mobile'           => '手机号不正确',
                'city.require' => '城市不能为空',
                'address.require' => '详细地址不能为空',
            ];
            $data = [
                'name'  => $name,
                'mobile'  => $mobile,
                'city'     => $city,
                'address'    => $address,
                'is_default'   => $is_default,
            ];
            $validate = new Validate($rule, $msg);
            $result = $validate->check($data);
            if (!$result) {
                $this->error(__($validate->getError()));
            }

            $data['user_id'] = $this->auth->getUser()->id;

            if (ExpressAddress::create($data)){
                $this->success('添加成功', url('express/address'));
            }else{
                $this->error('添加失败');
            }
        }

        $this->view->assign('title', '添加地址');
        return $this->view->fetch();
    }

    /**
     * 地址编辑
     */
    public function address_edit(){

        if ($this->request->isPost()){
            $id = $this->request->param('id');
            $name = $this->request->post("name");
            $mobile = $this->request->post("mobile");
            $city = $this->request->post("city");
            $address = $this->request->post("address");
            $is_default = $this->request->post("is_default");
            $token = $this->request->post('__token__');

            $rule = [
                'name'  => 'require',
                'mobile'    => 'regex:/^1\d{10}$/',
                'city'  => 'require',
                'address'     => 'require',
                '__token__' => 'token',
            ];
            $msg = [
                'name.require' => '姓名不能为空',
                'mobile'           => '手机号不正确',
                'city.require' => '城市不能为空',
                'address.require' => '详细地址不能为空',
            ];
            $data = [
                'name'  => $name,
                'mobile'  => $mobile,
                'city'     => $city,
                'address'    => $address,
                'is_default'   => $is_default,
            ];
            $validate = new Validate($rule, $msg);
            $result = $validate->check($data);
            if (!$result) {
                $this->error(__($validate->getError()));
            }

            //如果当前地址设为默认，则重置所有地址为非默认
            if ($is_default == 1){
                ExpressAddress::where('user_id', $this->auth->getUser()->id)->setField('is_default', 0);
            }

            if (ExpressAddress::update($data,['id'=>$id])){
                $this->success('编辑成功', url('express/address'));
            }else{
                $this->error('编辑失败');
            }
        }

        $id = $this->request->param('id');
        $data = ExpressAddress::get($id);
        $this->view->assign('title', '编辑地址');
        $this->view->assign('data', $data);
        return $this->view->fetch();
    }

    /**
     * 删除地址
     */
    public function address_del(){
        $id = $this->request->param('id');
        $res = ExpressAddress::where('id', $id)->delete();
        if ($res) {
            $this->success('删除成功', url('express/address'));
        }
        $this->error('删除失败');
    }

}
