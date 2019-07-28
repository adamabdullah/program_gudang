$(document).ready(function() {
    // set time ke bahasa lokal
    moment.locale('id');

    // menampilkan waktu
    setInterval(function() {
        $('#date_time').text(
            moment().format("dddd, Do MMMM YYYY, HH:mm:ss")
        );
    }, 1000);

    // get layout height
    let mainLayoutHeight = $(document).height() - 75;
    let mainMenuHeight = $(document).height() - 131;
    let mainPageHeight = $(document).height() - 77;
    let oldWidth = null;
    // on Expand Layout
    $('#main-layout').layout({
        maxHeight: mainLayoutHeight,
        onExpand: function(region) {
            $('#main-layout').layout('resize', {
                height: mainLayoutHeight
            });
            $('#main-page').parent().css('left', '15%');
            oldWidth = $('#page-content > .datagrid').width();
            $('#page-content > .datagrid').width(1000);
        },
        onCollapse: function(region) {
            $('#main-layout').layout('resize', {
                height: mainLayoutHeight
            });
            $('#main-page').parent().css({
                left: 31
            });
            $('#page-content > .datagrid').width(oldWidth);
        }
    });

    // set menu on click
    $('.easyui-tree .tree-node').click(function(e) {
        e.preventDefault();
        var pageTitle = $(this).find('.tree-title i').attr('data-title');
        var pageUrl = $(this).find('.tree-title i').attr('data-url');
        var isOpen = false;
        // find already open tab
        var tabsTitle = $('.tabs-title');
        for (let i = 0; i < tabsTitle.length; i++) {
            var tabTitle = $(tabsTitle).eq(i).text();
            if (tabTitle == pageTitle) {
                isOpen = true;
                break;
            }
        }
        console.log("$('#main-layout').height()", $('#main-layout').height());
        if (pageUrl != undefined && (pageUrl != '' && isOpen == false)) {
            // hide panel
            $('#main-layout').layout('collapse', 'west');
            // show progress bar
            messager_progress();
            setTimeout(() => {
                // load page
                var pageContent;
                $.ajax({
                    url: pageUrl,
                    method: 'get',
                    dataType: 'json',
                    success: function(data) {
                        pageContent = data.page;

                    },
                    complete: function(data) {
                        // close progress bar
                        messager_progress('close');
                        // create tabs
                        $('#main-tabs').tabs('add', {
                            title: pageTitle,
                            content: pageContent,
                            closable: true
                        });

                        // set label width
                        var labels = $('label');
                        for (let i = 0; i < labels.length; i++) {
                            var lbl = $(labels).eq(i);
                            var lblWidth = lbl.attr('labelwidth');
                            if (lblWidth != undefined) {
                                lbl.width(lblWidth); 
                            }
                        }
                    }
                });
            }, 200);
        } else {
            if (isOpen == true) {
                $('#main-layout').layout('collapse', 'west');
            }
            $('#main-tabs').tabs('select', tabTitle);
        }
    });

    // initial layout height
    $('#main-layout').height(mainLayoutHeight);
    $('#main-menu').height(mainMenuHeight);
    $('#main-page').height(mainPageHeight);

    // hide main-window
    // $('#window-modal').window();

    // extend combobox
    $.extend($.fn.combobox.defaults, {
        onBeforeLoad: function(params) {
            let $_this = $(this);
            $_this.combobox('textbox').bind('keydown', function(e){
                if (e.keyCode == 40){
                    $_this.combobox('showPanel');
                }
            })
        }
    });

    // extend datagrid
    $.extend($.fn.datagrid.defaults, {
        onBeginEdit: function(index, row) {
            let $_this = $(this);
            let rowKey = Object.keys(row);
            for(let i=0; i < rowKey.length; i++) {
                let fieldKey = rowKey[i];
                
                let ed = $_this.datagrid('getEditor', {index:index, field:fieldKey});
                if (ed){
                    ($(ed.target).data('textbox') ? $(ed.target).textbox('textbox') : $(ed.target)).bind('keydown', function(e){
                        if (e.keyCode == 13){ // on Enter
                            // move next column
                            let fieldKeyNext = rowKey[i+1];
                            let edNext = $_this.datagrid('getEditor', {index:index, field:fieldKeyNext});
                            if (edNext){
                                ($(edNext.target).data('textbox') ? $(edNext.target).textbox('textbox') : $(edNext.target)).focus();
                            }
                            else { // return accept
                                if(!$_this.datagrid('validateRow', index)) {
                                    messager_alert('Info', 'Silahkan lengkapi data', 'info');    
                                    return false;
                                }
                                $_this.datagrid('acceptChanges');
                                // hide & show toolbar
                                $_this.parent().siblings('.datagrid-toolbar').find('.tb-show').show();
                                $_this.parent().siblings('.datagrid-toolbar').find('.tb-hide').hide();
                            }
                        }
                    })
                }
            }
        }
	})
	
	// extend hide textbox & combobox
	$.extend($.fn.textbox.methods, {
		show: function(jq){
			return jq.each(function(){
				$(this).next().show();
			})
		},
		hide: function(jq){
			return jq.each(function(){
				$(this).next().hide();
			})
		}
    })
    
    // extend window position
    $.extend($.fn.window.defaults, {
        onClose: function() {
            $(this).window('hcenter').window('vcenter')
        },
        onOpen: function() {
            $(this).window('hcenter').window('vcenter')
        }
    })
});

