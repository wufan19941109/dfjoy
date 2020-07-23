<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// 前台
Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace'=>'index','middleware'=>['Main:index.msgDo','Appointment:index.appointment']],function (){
    Route::get('/','IndexController@index')->name('index.index');
    Route::get('/pro','IndexController@projectCases')->name('index.pro');
    Route::get('/News','IndexController@News')->name('index.News');
    Route::get('/about','IndexController@about')->name('index.about');
    Route::get('/repairFlow','IndexController@repairFlow')->name('index.repairFlow');
    Route::get('/main','IndexController@main')->name('index.main');
    Route::get('/msgDo','IndexController@msgDo')->name('index.msgDo');
    Route::get('/FAQ','IndexController@FAQ')->name('index.FAQ');
    Route::post('/appointment','IndexController@appointment')->name('index.appointment');
    Route::get('/msg','IndexController@msg')->name('index.msg');
    Route::get('/serDetail/{id}','IndexController@serDetail')->name('index.serDetail');
    Route::get('/delAllFiles','IndexController@delAllFiles')->name('index.delAllFiles');
    Route::post('/delAllFilesDo','IndexController@delAllFilesDo')->name('index.delAllFilesDo');

});
Route::group(['namespace'=>'Cases'],function (){
    Route::get('/case/{id}','CasesController@case')->name('project.case');
 });

Route::group(['namespace'=>'News'],function (){
    Route::get('/New/{id}','NewController@New')->name('News.New');
});

Route::group(['namespace'=>'tools'],function (){
    Route::get('/tools/ORC','ORCController@index')->name('ORC.index');
    Route::get('/tools/','ToolsController@index')->name('tools.index');
    Route::get('/tools/titles','TitlesController@index')->name('titles.index');
    Route::get('/tools/titleBuilding','TitlesController@titleBuilding')->name('titles.titleBuilding');

});

//后台

Route::group(['prefix'=>'admin','namespace'=>'admin','middleware'=>['CheckLogin:admin.login']],function (){
    Route::get('/','IndexController@index')->name('admin.index');
    Route::get('/index','IndexController@main')->name('admin.main');
    Route::get('/error','IndexController@error')->name('admin.error');





    //国际站标题管理
    Route::get('/Modifier','TitlesController@Modifier')->name('admin.Modifier');
    Route::post('/ModifierList','TitlesController@ModifierList')->name('admin.ModifierList');
    Route::post('/addModifierDo','TitlesController@addModifierDo')->name('admin.addModifierDo');
    Route::get('/addModifier','TitlesController@addModifier')->name('admin.addModifier');
    Route::get('/ModifierDel/{id}','TitlesController@ModifierDel')->name('admin.ModifierDel');
    Route::get('/ModifierUpdate/{id}','TitlesController@ModifierUpdate')->name('admin.ModifierUpdate');
    Route::post('/ModifierUpdateDo','TitlesController@ModifierUpdateDo')->name('admin.ModifierUpdateDo');

    //员工管理
    Route::get('/users','UsersController@index')->name('admin.users');//显示员工列表HTML
    Route::post('/usersList','UsersController@usersList')->name('admin.usersList');//显示员工列表 ajax
    Route::get('/userAdd','UsersController@userAdd')->name('admin.userAdd');
    Route::post('/ajaxCheckUsername','UsersController@ajaxCheckUsername')->name('admin.ajaxCheckUsername');//ajax 检测用户名是否存在
    Route::post('/userAddDo','UsersController@userAddDo')->name('admin.userAddDo');// post 添加员工
    Route::get('/userDel/{id}','UsersController@userDel')->name('admin.userDel');// post 删除员工
    Route::get('/userUpdate/{id}','UsersController@userUpdate')->name('admin.userUpdate');// get 修改员工
    Route::post('/userUpdateDo','UsersController@userUpdateDo')->name('admin.userUpdateDo');// post 修改员工

    //登录相关
    Route::get('/login','LoginController@login')->name('admin.login');// 登录页面
    Route::post('/loginDo','LoginController@loginDo')->name('admin.loginDo');// 登录检测
    Route::get('/logout','LoginController@logout')->name('admin.logout');//退出登录

    //案例相关
    Route::get('/cases','CasesController@cases')->name('admin.cases');//case管理页面
    Route::post('/casesList','CasesController@casesList')->name('admin.casesList');//case列表
    Route::get('/caseDel/{id}','CasesController@caseDel')->name('admin.caseDel');//case Del
    Route::get('/caseAdd','CasesController@caseAdd')->name('admin.caseAdd');//case 添加
    Route::post('/caseAddDo','CasesController@caseAddDo')->name('admin.caseAddDo');//case 添加
    Route::post('/casePicUp','CasesController@casePicUp')->name('admin.casePicUp');//case 图片
    Route::get('/caseUpdate/{id}','CasesController@caseUpdate')->name('admin.caseUpdate');//case 修改
    Route::post('/caseUpdateDo','CasesController@caseUpdateDo')->name('admin.caseUpdateDo');//Scase 修改

    //新闻相关
    Route::get('/news','NewsController@news')->name('admin.news');//news list
    Route::post('/newsList','NewsController@newsList')->name('admin.newsList');//news list
    Route::get('/newsDel/{id}','NewsController@newsDel')->name('admin.newsDel');//news 删除
    Route::get('/newsAdd','NewsController@newsAdd')->name('admin.newsAdd');//news 添加
    Route::post('/newsPicUp','NewsController@newsPicUp')->name('admin.newsPicUp');//news 添加图片
    Route::post('/newsAddDo','NewsController@newsAddDo')->name('admin.newsAddDo');//news 添加
    Route::get('/newsUpdate/{id}','NewsController@newsUpdate')->name('admin.newsUpdate');//news 添加

    //FAQ
    Route::get('/FAQ','FAQController@FAQ')->name('admin.FAQ');//FAQ 页面
    Route::post('/FAQList','FAQController@FAQList')->name('admin.FAQList');//FAQ list
    Route::get('/FAQDel/{id}','FAQController@FAQDel')->name('admin.FAQDel');//FAQ list
    Route::get('/FAQAdd','FAQController@FAQAdd')->name('admin.FAQAdd');//FAQ ADD
    Route::post('/FAQAddDo','FAQController@FAQAddDo')->name('admin.FAQAddDo');//FAQ AddDo
    Route::get('/FAQUpdate/{id}','FAQController@FAQUpdate')->name('admin.FAQUpdate');//FAQ AddDo
    Route::post('/FAQUpdateDo','FAQController@FAQUpdateDo')->name('admin.FAQUpdateDo');//FAQ AddDo

    //FAQCate
    Route::get('/FAQCate','FAQCateController@FAQCate')->name('admin.FAQCate');//FAQ AddDo
    Route::post('/FAQCateList','FAQCateController@FAQCateList')->name('admin.FAQCateList');
    Route::get('/FAQCateAdd','FAQCateController@FAQCateAdd')->name('admin.FAQCateAdd');
    Route::post('/FAQCateAddDo','FAQCateController@FAQCateAddDo')->name('admin.FAQCateAddDo');
    Route::get('/FAQCateDel/{id}','FAQCateController@FAQCateDel')->name('admin.FAQCateDel');
    Route::get('/FAQCateUpdate/{id}','FAQCateController@FAQCateUpdate')->name('admin.FAQCateUpdate');
    Route::post('/FAQCateUpdateDo','FAQCateController@FAQCateUpdateDo')->name('admin.FAQCateUpdateDo');


    //客服设置
    Route::post('/KFUpdateDo','KFController@KFUpdateDo')->name('admin.KFUpdateDo');
    Route::get('/KFUpdate','KFController@index')->name('admin.KFUpdate');
    Route::get('/send','MailController@send')->name('admin.send');


    //留言
    Route::get('/message','MessageController@index')->name('admin.message');
    Route::post('/messageList','MessageController@messageList')->name('admin.messageList');
    Route::get('/messageDel/{id}','MessageController@messageDel')->name('admin.messageDel');
    Route::get('/messageView/{id}','MessageController@messageView')->name('admin.messageView');


    //预约
    Route::get('/appointment','appointmentController@index')->name('admin.appointment');
    Route::post('/appointmentList','appointmentController@appointmentList')->name('admin.appointmentList');
    Route::get('/appointmentDel/{id}','appointmentController@appointmentDel')->name('admin.appointmentDel');



    //邮箱  收件
    Route::get('/email','emailController@index')->name('admin.email');
    Route::post('/emailList','emailController@emailList')->name('admin.emailList');
    Route::get('/emailUpdate/{id}','emailController@emailUpdate')->name('admin.emailUpdate');
    Route::post('/emailUpdateDo','emailController@emailUpdateDo')->name('admin.emailUpdateDo');

    //发件
   // Route::post('/emailList','emailController@emailList')->name('admin.emailList');


});
