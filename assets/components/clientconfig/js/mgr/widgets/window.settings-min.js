ClientConfig.window.Setting=function(e){e=e||{},e.id=e.id||Ext.id(),Ext.applyIf(e,{title:e.isUpdate?_("clientconfig.update_setting"):e.isDuplicate?_("clientconfig.duplicate_setting"):_("clientconfig.add_setting"),autoHeight:!0,url:ClientConfig.config.connectorUrl,baseParams:{action:e.isUpdate?"mgr/settings/update":"mgr/settings/create"},width:750,fields:[{xtype:"hidden",name:"id"},{layout:"column",items:[{columnWidth:.5,layout:"form",items:[{xtype:"textfield",name:"key",fieldLabel:_("clientconfig.key")+"*",allowBlank:!1,anchor:"100%"},{xtype:"textfield",name:"label",fieldLabel:_("clientconfig.label")+"*",allowBlank:!1,anchor:"100%"},{xtype:"textarea",name:"description",fieldLabel:_("clientconfig.description"),anchor:"100%"},{xtype:"clientconfig-combo-groups",name:"group",fieldLabel:_("clientconfig.group"),anchor:"100%",autoLoad:!0,storeLoadListener:function(e,t,i){return this.getValue()<1&&this.setValue(e.getAt(0).get(this.valueField)),!0}},{xtype:"numberfield",name:"sortorder",fieldLabel:_("clientconfig.sortorder"),allowBlank:!1,minValue:0,maxValue:9999999999,anchor:"100%",value:0}]},{columnWidth:.5,layout:"form",items:[{xtype:"clientconfig-combo-fieldtypes",name:"xtype",fieldLabel:_("clientconfig.xtype")+"*",allowBlank:!1,anchor:"100%",listeners:{select:{fn:function(t,i){"modx-combo"==i.data.xtype?(Ext.getCmp(e.id+"-options").show(),Ext.getCmp(e.id+"-process_options").show()):(Ext.getCmp(e.id+"-options").hide(),Ext.getCmp(e.id+"-process_options").hide()),-1!==["modx-panel-tv-image","modx-panel-tv-file"].indexOf(i.data.xtype)?Ext.getCmp(e.id+"-source").show():Ext.getCmp(e.id+"-source").hide()},scope:this}}},{xtype:e.record&&e.record.xtype&&-1!==["textarea","richtext"].indexOf(e.record.xtype)?"textarea":"textfield",name:"value",fieldLabel:_("clientconfig.value"),anchor:"100%"},{xtype:"textarea",id:e.id+"-options",name:"options",fieldLabel:_("clientconfig.options"),description:_("clientconfig.options.desc"),anchor:"100%",hidden:!e.record||"modx-combo"!==e.record.xtype},{xtype:"checkbox",id:e.id+"-process_options",name:"process_options",boxLabel:_("clientconfig.process_options"),anchor:"100%"},{xtype:"modx-combo-source",id:e.id+"-source",name:"source",fieldLabel:_("clientconfig.source"),description:_("clientconfig.source.desc"),anchor:"100%",hidden:!e.record||-1===["modx-panel-tv-image","modx-panel-tv-file"].indexOf(e.record.xtype),hideMode:"offsets",value:0},{xtype:"checkbox",name:"is_required",boxLabel:_("clientconfig.is_required.long"),anchor:"100%"}]}]}],keys:[]}),ClientConfig.window.Setting.superclass.constructor.call(this,e)},Ext.extend(ClientConfig.window.Setting,MODx.Window),Ext.reg("clientconfig-window-setting",ClientConfig.window.Setting);