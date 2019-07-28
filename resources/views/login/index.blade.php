 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include('login.header.header')
    <title></title>
  </head>
<!-- <div class="wrapper fadeInDown">
  <div id="formContent">
    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
      
    </form>
   
  </div>
</div> -->
<div style="width:50%; padding-top: 15px" id="panel-group-coa">
    <div class="easyui-panel" title="Login" style="width:100%;padding:30px 60px;">
        <form id="login-form" class="easyui-form" method="post" data-options="novalidate:true">
        <input type="hidden" name="_token" value="{{csrf_token()}}"></input>
            <div class="form-group">
                <label for="" class="col-sm-4">Username<font color=red> *</font></label>
                <div class="col-sm-8">
                    <input class="easyui-textbox" name="username" id="username" style="width:100%" data-options="required:true, prompt:'Username'"/>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="form-group">
                <label for="" class="col-sm-4">Password<font color=red> *</font></label>
                <div class="col-sm-8">
                    <input class="easyui-passwordbox" name="password" id="password" style="width:100%" data-options="required:true, prompt:'Password'"/>
                </div>
                <div class="clearfix"></div>
            </div>
           
        </form>
        <div style="text-align:right;padding:5px 0">
            <a href="javascript:void(0)" class="easyui-linkbutton" id="submit-group-coa" onclick="login()" style="width:80px">Login</a>
            <a href="javascript:void(0)" class="easyui-linkbutton" id="reset-group-coa" onclick="clear_login(true, false)" style="width:80px">Batal</a>
        </div>
    </div>
</div>

<div id='tampilan'>
</div>
<script>
$.ajaxSetup({
    headers:
    {
        'X-CSRF-TOKEN' : $("meta[name='csrf-token'").attr('content')
    }
});



 function login() {
	$.messager.progress();	// display the progress bar
	$('#login-form').form('submit', {
	    url: 'http://localhost:8000/login_form',
	    onSubmit: function () {
		var isValid = $(this).form('enableValidation').form('validate');
		if (!isValid) {
		    $.messager.progress('close');	// hide progress bar while the form is invalid
		    return $('#login-form').form('enableValidation').form('validate');
		}
	    },
	    success: function (data) 
        {
            
            $.messager.progress('close');	// hide progress bar while submit successfully
            var parseData = JSON.parse(data);
            console.log(parseData,'parseData');
            if(parseData.msg == 'Success')
            {
                 window.location="http://localhost:8000/borwita";
            }
            else
            {
                window.location="http://localhost:8000/login";
            }
            $.messager.alert('Info', parseData.msg, 'info');
	    }
	});
    }
</script>