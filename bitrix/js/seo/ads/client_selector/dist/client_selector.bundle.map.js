{"version":3,"sources":["client_selector.bundle.js"],"names":["this","BX","Seo","exports","main_core","main_loader","_createForOfIteratorHelper","o","allowArrayLike","it","Symbol","iterator","Array","isArray","_unsupportedIterableToArray","length","i","F","s","n","done","value","e","_e","f","TypeError","normalCompletion","didErr","err","step","next","_e2","return","minLen","_arrayLikeToArray","Object","prototype","toString","call","slice","constructor","name","from","test","arr","len","arr2","_templateObject5","data","babelHelpers","taggedTemplateLiteral","_templateObject4","_templateObject3","_templateObject2","_templateObject","ClientSelector","container","params","classCallCheck","canAddItems","canUnSelectItem","onNewItemCallback","events","Type","isFunction","onNewItem","onSelectItemCallback","onSelectItem","onUnSelectItemCallback","onUnSelectItem","onRemoveItemCallback","onRemoveItem","init","setSelected","selected","setItems","items","enabled","loader","Loader","size","createClass","key","item","closeMenu","updateClientHtml","Dom","append","getHtml","Event","bind","onContainerClick","enable","selector","getSelectorNode","classList","remove","hide","disable","add","getElementsByClassName","show","Tag","render","Loc","getMessage","getMenuItemHtml","html","PICTURE","NAME","CLIENT_ID","innerHTML","getRemoveConfirmPopupHtml","replace","userAvatar","userName","userLink","empty","hasOwnProperty","LINK","avatarNode","querySelector","nameNode","linkNode","style","backgroundImage","removeProperty","textContent","setAttribute","removeAttribute","_this","menuItems","_iterator","_step","push","className","onclick","delimiter","text","PopupMenu","offsetTop","offsetLeft","angle","onPopupClose","destroy","removeClientLinks","currentItem","popupWindow","getContentContainer","querySelectorAll","_iterator2","_step2","removeClientLink","event","stopPropagation","clientId","target","_iterator3","_step3","_item","confirmRemoveItem","_this2","confirmPopup","PopupWindow","content","autoHide","cacheable","closeIcon","closeByEsc","buttons","UI","Button","color","Color","DANGER","close","Ads"],"mappings":"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","file":"client_selector.bundle.map.js"}