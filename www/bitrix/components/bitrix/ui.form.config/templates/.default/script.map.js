{"version":3,"sources":["script.js"],"names":["exports","main_core","main_core_events","_templateObject2","data","babelHelpers","taggedTemplateLiteral","_templateObject","_classPrivateMethodGet","receiver","privateSet","fn","has","TypeError","namespace","Reflection","_items","WeakMap","Config","options","_this","this","classCallCheck","defineProperty","set","writable","value","scopes","forEach","item","config","classPrivateFieldGet","push","BX","Ui","Form","ConfigItem","popupContainer","componentId","_scopeId","_members","_node","_selectedItems","_moduleId","_openPopupEvent","_reinitDialogEvent","_drawMembers","WeakSet","_createMember","_createPlusButton","_showPopup","_addEvents","_getSelectedItems","_removeEvents","_adjust","_EventEmitter","inherits","_this2","possibleConstructorReturn","getPrototypeOf","call","add","assertThisInitialized","setEventNamespace","classPrivateFieldSet","concat","drawingIconsLimit","_drawMembers2","addToAccessCodesHandler","delegate","onAddToAccessCodes","removeFromAccessCodesHandler","onRemoveFromAccessCodes","closePopupHandler","onClosePopup","addCustomEvent","onGridUpdate","bind","setTimeout","onCustomEvent","openDialogWhenInit","createClass","key","params","_adjust2","event","isOpen","_removeEvents2","_this3","ajax","runComponentAction","moduleId","scopeId","accessCodes","_getSelectedItems2","then","result","onMemberSelect","state","EventEmitter","emit","onDialogClose","onMemberUnselect","i","member","appendChild","_createMember2","_createPlusButton2","children","avatar","Tag","render","url","Text","encode","name","Dom","create","attrs","class","_this4","events","click","_showPopup2","_addEvents2","selectorInstance","Main","selectorManagerV2","controls","itemsSelected","id","bindNode","selectorId","selectedItems","subscribe","items","type","toUpperCase","unsubscribe","members","firstChild","removeChild","window","Event"],"mappings":"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","file":"script.map.js"}