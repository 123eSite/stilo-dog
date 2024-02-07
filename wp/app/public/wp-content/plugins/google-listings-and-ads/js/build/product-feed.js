"use strict";(self.webpackChunkgoogle_listings_and_ads=self.webpackChunkgoogle_listings_and_ads||[]).push([[25],{770:function(e,t,s){s.r(t),s.d(t,{default:function(){return De}});var a=s(9307),n=s(5736),l=s(431),o=s(6439),i=s(5609),r=s(4184),c=s.n(r),d=s(5720),g=s(8500),u=s(8027),m=s(6020),_=s(3108),p=[{key:"type",label:(0,n.__)("Type","google-listings-and-ads"),isLeftAligned:!0,required:!0},{key:"affectedProduct",label:(0,n.__)("Affected product","google-listings-and-ads"),isLeftAligned:!0,required:!0},{key:"issue",label:(0,n.__)("Issue","google-listings-and-ads"),isLeftAligned:!0,required:!0},{key:"suggestedAction",label:(0,n.__)("Suggested action","google-listings-and-ads"),isLeftAligned:!0,required:!0},{key:"action",label:"",required:!0}],E=s(1410),v=s(965),y=s(8144),h=s(6013),b=s(7581),f=s(7714),w=s(4848),k=s(4486),N=()=>{const e=(0,w.Z)(),t={[_.vt]:(0,n.__)("All account issues resolved","google-listings-and-ads"),[_.ue]:(0,n.__)("All product issues resolved","google-listings-and-ads")},s={[_.vt]:(0,a.createInterpolateElement)((0,n.__)("However, there are issues affecting your products that needs to be resolved. Head over to the <strong>Product Issues</strong> tab to view them.","google-listings-and-ads"),{strong:(0,a.createElement)("strong",null)}),[_.ue]:(0,a.createInterpolateElement)((0,n.__)("However, there are issues affecting your account that needs to be resolved. Head over to the <strong>Account Issues</strong> tab to view them.","google-listings-and-ads"),{strong:(0,a.createElement)("strong",null)})};return(0,a.createElement)("div",{className:"gla-issues-solved"},(0,a.createElement)(i.Dashicon,{icon:"yes-alt",className:"gla-issues-solved__icon"}),(0,a.createElement)(k.Z,{variant:"subtitle"},t[e]),(0,a.createElement)(k.Z,{variant:"body",className:"gla-issues-solved__body"},s[e]))},C=s(8359),S=s(591),Z=e=>{let{issue:t,onRequestClose:s=(()=>{})}=e;return(0,a.createElement)(S.Z,{className:"gla-issues-table-data-modal",title:t.issue,onRequestClose:s,buttons:[(0,a.createElement)(v.Z,{key:"learn-more",isPrimary:!0,target:"_blank",href:t.action_url,text:(0,n.__)("Learn more","google-listings-and-ads"),eventName:"gla_documentation_link_click",eventProps:{context:"issues-data-table-modal",linkId:t.code,href:t.action_url},icon:(0,a.createElement)(C.Z,null)})]},(0,a.createElement)("p",null,(0,a.createElement)("strong",null,(0,n.__)("What to do?","google-listings-and-ads"))),(0,a.createElement)("p",null,t.action))},P=e=>{let{data:t}=e;const s=(0,n.__)("Read more about this issue","google-listings-and-ads");return t?t.issues?.length?(0,a.createElement)(m.Table,{caption:(0,n.__)("Issues to resolve","google-listings-and-ads"),headers:p,rows:t.issues.map((e=>[{display:"warning"===e.severity?(0,a.createElement)(y.Z,null):(0,a.createElement)(h.Z,null)},{display:e.product},{display:e.issue},{display:e.action?(0,a.createElement)(f.Z,{button:(0,a.createElement)(v.Z,{isLink:!0,eventName:"gla_click_read_more_about_issue",eventProps:{context:"issues-to-resolve",issue:e.code}},s),modal:(0,a.createElement)(Z,{issue:e})}):(0,a.createElement)(u.Z,{context:"issues-to-resolve",linkId:e.code,href:e.action_url},s)},{display:e.type===_.ue&&(0,a.createElement)(b.Z,{productId:e.product_id,eventName:"gla_edit_product_issue_click",eventProps:{code:e.code,issue:e.issue}})}]))}):(0,a.createElement)(N,null):(0,a.createElement)(m.EmptyTable,{headers:p,numberOfRows:1},(0,n.__)("An error occurred while retrieving issues. Please try again later.","google-listings-and-ads"))},I=s(9685),x=s(5873),q=()=>{const e=(0,w.Z)(),{page:t,setPage:s}=(0,x.Z)(e),{data:l,hasFinishedResolution:o}=(0,I.Z)(e,t);return(0,a.createElement)(a.Fragment,null,(0,a.createElement)(i.CardBody,{size:null},o?(0,a.createElement)(P,{data:l}):(0,a.createElement)(m.TablePlaceholder,{headers:p,caption:(0,n.__)("Loading Issues To Resolve","google-listings-and-ads")})),l?.total>0&&(0,a.createElement)(i.CardFooter,{justify:"center"},(0,a.createElement)(m.Pagination,{page:t,perPage:_.bc,total:l.total,showPagePicker:!1,showPerPagePicker:!1,onPageChange:(t,a)=>{s(t),(0,E.eF)(`${e}-issues-to-resolve`,t,a)}})))},A=s(4492),R=s(9497),F=()=>{const e=(0,R.Z)(),t=(0,w.Z)(),s=t=>{const s=e[t];return s>=0?`(${s})`:""},o=[{key:_.vt,title:`${(0,n.__)("Account Issues","google-listings-and-ads")} ${s(_.vt)}`,href:(0,l.getNewPath)({issueType:_.vt},"/google/product-feed",{})},{key:_.ue,title:`${(0,n.__)("Product Issues","google-listings-and-ads")} ${s(_.ue)}`,href:(0,l.getNewPath)({issueType:_.ue},"/google/product-feed",{})}];return(0,a.createElement)(A.Z,{tabs:o,selectedKey:t})},L=e=>{let{issues:t=[]}=e;const[s,l]=(0,a.useState)(!1);if(!t.length)return null;const o=s?t:t.slice(0,5);return(0,a.createElement)(a.Fragment,null,(0,a.createElement)(k.Z,{variant:"subtitle"},(0,n.__)("Request a review on the following issue(s):","google-listings-and-ads")),(0,a.createElement)("ul",{className:"gla-review-request-modal__issue-list"},o.map((e=>(0,a.createElement)("li",{key:e.code},e.issue)))),t.length>5&&(0,a.createElement)(v.Z,{isTertiary:!0,onClick:()=>{(0,E.dk)("gla_request_review_issue_list_toggle_click",{action:s?"collapse":"expand"}),l(!s)}},s?(0,n.__)("Show less","google-listing-and-ads"):(0,n.sprintf)(
// translators: %d: The number of extra issues issues
(0,n.__)("+ %d more issue(s)","google-listing-and-ads"),t.length-5)))},G=s(533),D=s(2760),T=e=>{let{issues:t=[],isActive:s=!1,onClose:l=(()=>{})}=e;const[o,r]=(0,a.useState)(!1),[c,d]=(0,a.useState)(!1),{sendMCReviewRequest:g}=(0,G.T)(),{createNotice:m}=(0,D.Z)();if(!s)return null;const _=e=>{c||l(e)};return(0,a.createElement)(S.Z,{className:"gla-review-request-modal",title:(0,n.__)("Request account review","google-listings-and-ads"),buttons:[(0,a.createElement)(v.Z,{key:"secondary",isSecondary:!0,onClick:()=>{_("maybe-later")}},(0,n.__)("Cancel","google-listings-and-ads")),(0,a.createElement)(v.Z,{loading:c,key:"primary",isPrimary:!0,disabled:!o&&t.length,onClick:()=>{c||(d(!0),(0,E.dk)("gla_request_review"),g().then((()=>{m("success",(0,n.__)("Your account review was successfully requested.","google-listings-and-ads")),(0,E.dk)("gla_request_review_success"),l("request-review-success")})).catch((()=>{d(!1),(0,E.dk)("gla_request_review_failure")})))}},(0,n.__)("Request account review","google-listings-and-ads"))],onRequestClose:()=>{_("dismiss")}},(0,a.createElement)(i.Notice,{className:"gla-review-request-modal__notice",status:"warning",isDismissible:!1},(0,a.createElement)("p",null,(0,a.createInterpolateElement)((0,n.__)("Please ensure that you have resolved all account suspension issues before requesting for an account review. If some issues are unresolved, you wont be able to request another review for at least 7 days. <Link>Learn more</Link>","google-listings-and-ads"),{Link:(0,a.createElement)(u.Z,{href:"https://support.google.com/merchants/answer/2948694",context:"request-review-modal",linkId:"request-review-modal-learn-more"})}))),(0,a.createElement)(L,{issues:t}),t.length>0&&(0,a.createElement)(i.CheckboxControl,{className:"gla-review-request-modal__checkbox",label:(0,n.__)("I have resolved all the issue(s) listed above.","google-listings-and-ads"),checked:o,onChange:e=>{r(e),(0,E.dk)("gla_request_review_issues_solved_checkbox_click",{action:e?"check":"uncheck"})}}))},O=s(9771),B=s(9192),$=s(2438);const M={status:(0,a.createElement)("span",{className:"gla-error"},(0,n.__)("Disapproved","google-listing-and-ads")),statusDescription:(0,n.__)("To make products eligible to show on Google, fix all setup and policy issues that were found.","google-listing-and-ads"),title:(0,n.__)("We’ve found unresolved issues in your account.","google-listing-and-ads"),body:(0,n.__)("Fix all account suspension issues listed below to request a review of your account.","google-listing-and-ads"),requestButton:!0,icon:(0,a.createElement)(h.Z,{size:24})},U={...M,status:(0,n.__)("Warning","google-listing-and-ads"),statusDescription:(0,n.__)("To keep showing your products on Google, fix your setup and policy issues.","google-listing-and-ads"),icon:(0,a.createElement)(y.Z,{size:24})},z={status:(0,n.__)("Pending review","google-listing-and-ads"),statusDescription:(0,n.__)("This may take up to 3 days. If approved, your products will show on Google once it’s completed.","google-listing-and-ads"),icon:(0,a.createElement)($.Z,{size:24})};var W={UNDER_REVIEW:{status:(0,n.__)("Under review","google-listing-and-ads"),statusDescription:(0,n.__)("Review requests take at least 7 days.","google-listing-and-ads"),icon:(0,a.createElement)($.Z,{size:24})},PENDING_REVIEW:z,DISAPPROVED:M,WARNING:U,APPROVED:{status:(0,a.createElement)("span",{className:"gla-success"},(0,n.__)("Approved","google-listing-and-ads")),statusDescription:(0,n.__)("Your products listings are on Google.","google-listing-and-ads"),icon:(0,a.createElement)(B.Z,{size:24})},ONBOARDING:{status:(0,n.__)("No products added","google-listing-and-ads"),statusDescription:(0,n.__)("Add and sync products to Google.","google-listing-and-ads"),icon:(0,a.createElement)(y.Z,{size:24})}},H=e=>{let{account:t,onRequestReviewClick:s=(()=>{})}=e;const l=W[t.status];if(!l)return null;const o=t.cooldown&&(0,n.sprintf)(
// translators: %s: Cool down period date.
(0,n.__)("Your account is under cool down period. You can request a new review on %s.","google-listings-and-ads"),(0,O.format)(`${_.glaData.dateFormat}, ${_.glaData.timeFormat}`,new Date(t.cooldown)));return(0,a.createElement)(i.Flex,{"data-testid":"gla-review-request-notice",className:"gla-review-request-notice"},(0,a.createElement)(i.FlexItem,null,(0,a.createElement)(i.Flex,null,(0,a.createElement)(i.FlexItem,{className:"gla-review-request-notice__icon"},l.icon),(0,a.createElement)(i.FlexItem,{className:"gla-review-request-notice__text"},(0,a.createElement)(k.Z,{variant:"subtitle"},l.title),(0,a.createElement)(k.Z,{className:"gla-review-request-notice__text-body",variant:"body"},o||l.body)))),(0,a.createElement)(i.FlexItem,{className:"gla-review-request-notice__button"},l.requestButton&&(t.cooldown||t.reviewEligibleRegions.length>0)&&(0,a.createElement)(v.Z,{isPrimary:!0,onClick:s,disabled:!!t.cooldown,text:(0,n.__)("Request review","google-listings-and-ads")})))},Y=e=>{let{account:t={}}=e;const[s,n]=(0,a.useState)(!1),l=(0,w.Z)(),{data:o,hasFinishedResolution:i}=(0,I.Z)(_.vt,1,200),{data:r,hasFinishedResolution:c}=t;return i&&c&&(d=r.status,W[d]?.title)&&l===_.vt?(0,a.createElement)("div",{className:"gla-review-request"},(0,a.createElement)(T,{issues:o.issues.filter((e=>r.issues.includes(e.code))),isActive:s,onClose:e=>{n(!1),(0,E.dk)("gla_modal_closed",{context:_.O8,action:e})}}),(0,a.createElement)(H,{account:r,onRequestReviewClick:()=>{n(!0),(0,E.dk)("gla_modal_open",{context:_.O8})}})):null;var d},V=s(2109);const j=(0,a.createElement)(g.Z,{id:"issues-to-resolve"},(0,a.createInterpolateElement)((0,n.__)("Products and stores must meet <link>Google Merchant Center’s requirements</link> in order to get approved. WooCommerce and Google automatically check your product feed to help you resolve any issues. ","google-listings-and-ads"),{link:(0,a.createElement)(u.Z,{context:"product-feed",linkId:"issues-to-resolve",href:"https://support.google.com/merchants/answer/6363310"})}));var K=()=>{const{total:e}=(0,R.Z)(),t=(0,V.Z)("getMCReviewRequest");return e?(0,a.createElement)(d.Z,{className:"gla-issues-table-card"},(0,a.createElement)(i.Card,{className:c()("woocommerce-table",{"has-actions":!!j})},(0,a.createElement)(i.CardHeader,null,(0,a.createElement)(k.Z,{variant:"title-small",as:"h2"},(0,n.__)("Issues to resolve","google-listings-and-ads")),(0,a.createElement)("div",{className:"woocommerce-table__actions"},j)),(0,a.createElement)(F,null),(0,a.createElement)(Y,{account:t}),(0,a.createElement)(q,null))):null},Q=s(7462),J=s(4688),X=s(4863);const ee=(0,n.__)("Select channel visibility","google-listings-and-ads"),te=[{key:0,value:!0,label:(0,n.__)("Sync and show","google-listings-and-ads")},{key:1,value:!1,label:(0,n.__)("Don’t sync and show","google-listings-and-ads")}];function se(e){let{withTooltip:t,children:s,...n}=e;return t?(0,a.createElement)(X.Z,(0,Q.Z)({children:s},n)):s}function ae(e){let{selectedSize:t,onActionClick:s}=e;const[l,o]=(0,a.useState)(null);return(0,a.useEffect)((()=>{0===t&&o(null)}),[t]),0===t?(0,a.createElement)(X.Z,{position:"top center",text:(0,n.__)("Select one or more products to bulk edit","google-listings-and-ads")},(0,a.createElement)(i.Icon,{icon:J.Z})):(0,a.createElement)(a.Fragment,null,(0,a.createElement)(m.SelectControl,{label:ee,options:te,selected:l,onChange:o}),(0,a.createElement)(se,{withTooltip:null===l,position:"top center",text:ee},(0,a.createElement)(v.Z,{isSecondary:!0,disabled:null===l,onClick:()=>{const e=te.find((e=>{let{key:t}=e;return t===l}));s(e.value)}},(0,n.sprintf)(
// translators: %d: number of selected products to edit channel visibility, with minimum value of 1.
(0,n.__)("Apply to %d selected","google-listings-and-ads"),t))))}var ne={approved:(0,n.__)("Approved","google-listings-and-ads"),partially_approved:(0,n.__)("Partially approved","google-listings-and-ads"),expiring:(0,n.__)("Expiring","google-listings-and-ads"),pending:(0,n.__)("Pending","google-listings-and-ads"),disapproved:(0,n.__)("Disapproved","google-listings-and-ads"),not_synced:(0,n.__)("Not synced","google-listings-and-ads")};const le="product-feed",oe=e=>e?"sync_and_show":"dont_sync_and_show";var ie=()=>{const[e,t]=(0,a.useState)(new Set),[s,l]=(0,a.useState)({page:1,per_page:10,orderby:"title",order:"asc"}),{hasFinishedResolution:o,data:r}=(0,V.Z)("getMCProductFeed",s),{updateMCProductVisibility:g}=(0,G.T)(),{createNotice:u}=(0,D.Z)(),_=e=>{if(e){const e=r?.products.map((e=>e.id));t(new Set([...e]))}else t(new Set)},p=[{key:"select",label:(0,a.createElement)(i.CheckboxControl,{disabled:!r?.products,checked:r?.products?.length>0&&r?.products?.every((t=>e.has(t.id))),onChange:_}),isLeftAligned:!0,required:!0},{key:"title",label:(0,n.__)("Product Title","google-listings-and-ads"),isLeftAligned:!0,required:!0,isSortable:!0},{key:"visible",label:(0,n.__)("Channel Visibility","google-listings-and-ads"),isLeftAligned:!0,isSortable:!0},{key:"status",label:(0,n.__)("Status","google-listings-and-ads"),isLeftAligned:!0,isSortable:!0},{key:"action",label:"",required:!0}],v=(0,a.createElement)(ae,{selectedSize:e.size,onActionClick:t=>{const s=Array.from(e),{length:a}=s;g(s,t).then((()=>{const e=(0,n.sprintf)(
// translators: %d: number of products are updated successfully, with minimum value of 1.
(0,n._n)("You successfully changed the channel visibility of %d product","You successfully changed the channel visibility of %d products",a,"google-listings-and-ads"),a);u("success",e)})),(0,E.dk)("gla_bulk_edit_click",{context:le,number_of_items:a,visibility_to:oe(t)}),_(!1)}});return(0,a.createElement)(d.Z,{className:"gla-product-feed-table-card"},(0,a.createElement)(i.Card,{className:c()("woocommerce-table",{"has-actions":!!v})},(0,a.createElement)(i.CardHeader,null,(0,a.createElement)(k.Z,{variant:"title-small",as:"h2"},(0,n.__)("Product Feed","google-listings-and-ads")),(0,a.createElement)("div",{className:"woocommerce-table__actions"},v)),(0,a.createElement)(i.CardBody,{size:null},!o&&(0,a.createElement)(m.TablePlaceholder,{headers:p,numberOfRows:s.per_page}),o&&!r?.products&&(0,a.createElement)(m.EmptyTable,{headers:p,numberOfRows:1},(0,n.__)("An error occurred while retrieving products. Please try again later.","google-listings-and-ads")),o&&r?.products&&(0,a.createElement)(m.Table,{headers:p,rows:r.products.map((s=>{return[{display:(0,a.createElement)(i.CheckboxControl,{checked:e.has(s.id),onChange:(l=s.id,s=>{s?t(new Set([...e,l])):(e.delete(l),t(new Set(e)))})})},{display:s.title},{display:s.visible?(0,n.__)("Sync and show","google-listings-and-ads"):(0,n.__)("Don't sync and show","google-listings-and-ads")},{display:ne[s.status]},{display:(0,a.createElement)(b.Z,{productId:s.id,eventName:"gla_edit_product_click",eventProps:{status:s.status,visibility:oe(s.visible)}})}];var l})),query:s,onSort:(e,t)=>{l({...s,orderby:e,order:t})}})),(0,a.createElement)(i.CardFooter,{justify:"center"},r?.total>0&&(0,a.createElement)(m.Pagination,{page:s.page,perPage:s.per_page,total:r.total,showPagePicker:!0,showPerPagePicker:!1,onPageChange:(e,t)=>{l({...s,page:e}),(0,E.eF)(le,e,t)}}))))},re=s(2819),ce=s(444);const de=()=>(0,a.createElement)(ce.SVG,{width:"8",height:"8",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,a.createElement)(ce.Circle,{cx:"4",cy:"4",r:"4"}));function ge(e){let{currentPage:t,numberOfPages:s,setCurrentPage:l}=e;return(0,a.createElement)("ul",{className:"components-guide__page-control","aria-label":(0,n.__)("Guide controls")},(0,re.times)(s,(e=>(0,a.createElement)("li",{key:e,"aria-current":e===t?"step":void 0},(0,a.createElement)(i.Button,{key:e,icon:(0,a.createElement)(de,null),"aria-label":(0,n.sprintf)(/* translators: 1: current page number 2: total number of pages */
(0,n.__)("Page %1$d of %2$d"),e+1,s),onClick:()=>l(e)})))))}function ue(e){const t=(0,a.useRef)();return(0,a.useLayoutEffect)((()=>{const{ownerDocument:e}=t.current,{activeElement:s,body:a}=e;s&&s!==a||t.current.focus()}),[]),(0,a.createElement)(i.Button,(0,Q.Z)({},e,{ref:t}))}function me(e){let{className:t,contentLabel:s,backButtonText:l,finishButtonText:o,renderFinish:r=(e=>e),onFinish:d,pages:g}=e;const[u,m]=(0,a.useState)(0),_=u>0,p=u<g.length-1,E=()=>{_&&m(u-1)},v=()=>{p&&m(u+1)};if(0===g.length)return null;let y=null;p||(y=r((0,a.createElement)(ue,{className:"components-guide__finish-button",onClick:d},o||(0,n.__)("Finish"))));const h=c()("gla-admin-page","components-guide",t);return(0,a.createElement)(i.Modal,{className:h,contentLabel:s,onRequestClose:d},(0,a.createElement)(i.KeyboardShortcuts,{key:u,shortcuts:{left:E,right:v}}),(0,a.createElement)("div",{className:"components-guide__container"},(0,a.createElement)("div",{className:"components-guide__page"},g[u].image,g.length>1&&(0,a.createElement)(ge,{currentPage:u,numberOfPages:g.length,setCurrentPage:m}),g[u].content),(0,a.createElement)("div",{className:"components-guide__footer"},_&&(0,a.createElement)(i.Button,{className:"components-guide__back-button",onClick:E},l||(0,n.__)("Previous")),p&&(0,a.createElement)(i.Button,{className:"components-guide__forward-button",onClick:v},(0,n.__)("Next")),y)))}var _e=s(56),pe=s(8749),Ee=s(9900),ve=s(146),ye=s.p+"images/js/src/product-feed/submission-success-guide/9a968634c60ce598aae3.woocommerce-logo.svg",he=s(5314);const be="gla_modal_closed",fe=(0,a.createElement)("div",{className:"gla-submission-success-guide__logo-block"},(0,a.createElement)("div",{className:"gla-submission-success-guide__logo-item"},(0,a.createElement)("img",{src:ye,alt:(0,n.__)("WooCommerce Logo","google-listings-and-ads"),width:"145",height:"31"})),(0,a.createElement)("div",{className:"gla-submission-success-guide__logo-separator-line"}),(0,a.createElement)("div",{className:"gla-submission-success-guide__logo-item"},(0,a.createElement)("img",{src:he,alt:(0,n.__)("Google Logo","google-listings-and-ads"),width:"106",height:"36"}))),we=[{image:fe,content:(0,a.createElement)(_e.Z,{title:(0,n.__)("You’ve successfully set up Google Listings & Ads! 🎉","google-listings-and-ads")},(0,a.createElement)("p",null,(0,n.__)("Your products are being synced and reviewed. Google reviews product listings in 3-5 days.","google-listings-and-ads")),(0,a.createElement)("p",null,_.glaData.adsSetupComplete?(0,n.__)("No ads will launch yet and you won’t be charged until Google approves your listings. Updates are available in your WooCommerce dashboard.","google-listings-and-ads"):(0,a.createInterpolateElement)((0,n.__)("<productFeedLink>Manage and edit your product feed in WooCommerce.</productFeedLink> We will also notify you of any product feed issues to ensure your products get approved and perform well on Google.","google-listings-and-ads"),{productFeedLink:(0,a.createElement)(_e._,{href:(0,ve.A6)(),context:"product-feed"})})))},{image:fe,content:(0,a.createElement)(_e.Z,{title:(0,n.__)("Spend $500 to get $500 in Google Ads credits","google-listings-and-ads")},(0,a.createElement)("p",null,(0,n.__)("New to Google Ads? Get $500 in ad credit when you spend $500 within your first 60 days* You can edit or cancel your campaign at any time.","google-listings-and-ads")),(0,a.createElement)("cite",null,(0,a.createInterpolateElement)((0,n.__)("*Full terms and conditions <link>here</link>.","google-listings-and-ads"),{link:(0,a.createElement)(_e._,{href:"https://www.google.com/ads/coupons/terms/",context:"terms-of-ads-coupons"})})))}];_.glaData.adsSetupComplete&&we.pop();const ke=e=>{(0,l.getHistory)().replace((0,ve.A6)());const t=(e.currentTarget||e.target).dataset.action||"dismiss";(0,E.dk)(be,{context:_.fL.SUBMISSION_SUCCESS,action:t})};var Ne=()=>{(0,a.useEffect)((()=>{(0,E.dk)("gla_modal_open",{context:_.fL.SUBMISSION_SUCCESS}),Ee.Z.set(_.dA.CAN_ONBOARDING_SETUP_CES_PROMPT_OPEN,!0)}),[]);const e=(0,a.useCallback)((()=>_.glaData.adsSetupComplete?(0,a.createElement)(v.Z,{isPrimary:!0,"data-action":"view-product-feed",onClick:ke},(0,n.__)("View product feed","google-listings-and-ads")):(0,a.createElement)(a.Fragment,null,(0,a.createElement)("div",{className:"gla-submission-success-guide__space_holder"}),(0,a.createElement)(v.Z,{isSecondary:!0,"data-action":"maybe-later",onClick:ke},(0,n.__)("Maybe later","google-listings-and-ads")),(0,a.createElement)(pe.Z,{isPrimary:!0,isSecondary:!1,isSmall:!1,eventName:be,eventProps:{context:_.fL.SUBMISSION_SUCCESS,action:"create-paid-campaign"}},(0,n.__)("Create paid campaign","google-listings-and-ads")))),[]);return(0,a.createElement)(me,{className:"gla-submission-success-guide",backButtonText:(0,n.__)("Back","google-listings-and-ads"),pages:we,renderFinish:e,onFinish:ke})},Ce=s(663),Se=s(7995),Ze=()=>{const e={strong:(0,a.createElement)("strong",null)};return(0,a.createElement)(g.Z,{id:"product-status"},(0,a.createElement)("p",null,(0,a.createInterpolateElement)((0,n.__)("Your product feed is <strong>automatically synced</strong> from WooCommerce to Google, every 1-2 days. ","google-listings-and-ads"),e)),(0,a.createElement)("p",null,(0,a.createInterpolateElement)((0,n.__)("<strong>‘Not synced’ products</strong> do not appear in Google listings. They are queued for submission, or they may be ineligible or excluded from the product feed.","google-listings-and-ads"),e)),(0,a.createElement)("p",null,(0,a.createInterpolateElement)((0,n.__)("After submission, Google assigns each product a status: <strong>Active, Expiring, Pending, or Disapproved.</strong>","google-listings-and-ads"),e)),(0,a.createElement)("p",null,(0,a.createInterpolateElement)((0,n.__)("<strong>‘Active’ products</strong> are fully approved and eligible to appear in free listings on Google.","google-listings-and-ads"),e)),(0,a.createElement)("p",null,(0,a.createInterpolateElement)((0,n.__)("<strong>‘Expiring’ products</strong> will become inactive and no longer appear in Google listings in the next 3 days.","google-listings-and-ads"),e)),(0,a.createElement)("p",null,(0,a.createInterpolateElement)((0,n.__)("<strong>‘Pending’ products</strong> are being processed by Google. They will not appear in listings until they are approved.","google-listings-and-ads"),e)),(0,a.createElement)("p",null,(0,a.createInterpolateElement)((0,n.__)("<strong>‘Disapproved’ products</strong> are inactive and do not appear in Google listings.","google-listings-and-ads"),e)),(0,a.createElement)("p",null,(0,a.createInterpolateElement)((0,n.__)("<link>Read more about product sync and statuses</link>","google-listings-and-ads"),{link:(0,a.createElement)(u.Z,{context:"product-feed",linkId:"product-sync-statuses",href:"https://support.google.com/merchants/answer/160491"})})))},Pe=e=>{let{icon:t,title:s,label:n,description:l,className:o}=e;return(0,a.createElement)(i.Flex,{className:o,justify:"normal",gap:1},(0,a.createElement)(i.FlexItem,null,s),(0,a.createElement)(i.FlexItem,{className:"gla-status__icon"},t),(0,a.createElement)(i.FlexItem,null,(0,a.createElement)("span",{className:"gla-status__label"},n),(0,a.createElement)("span",{className:"gla-status__description"},l)))},Ie=s(2249),xe=s(8299),qe=function(){const{data:e}=(0,V.Z)("getMCProductStatistics"),{Icon:t,status:s,description:l}=function(e){let{scheduled_sync:t,statistics:s,timestamp:a}=e;if(0!==t)return{Icon:$.Z,status:(0,n.__)("Sync in progress","google-listings-and-ads"),description:null};const l=(0,Ie.Z)(s);return{Icon:B.Z,status:(0,n.__)("Automatically synced to Google","google-listings-and-ads"),description:(0,n.sprintf)(
// translators: %s: datetime of last update products sync status, and %d: number of synced products, with minimum value of 1.
(0,n._n)("Last updated: %1$s, containing %2$d product","Last updated: %1$s, containing %2$d products",l,"google-listings-and-ads"),(0,O.format)(xe.Z,new Date(1e3*a)),l)}}(e);return(0,a.createElement)(Pe,{title:(0,n.__)("Sync with Google:","google-listings-and-ads"),icon:(0,a.createElement)(t,{className:"gla-success",size:24}),label:(0,a.createElement)("span",{className:"gla-success"},s),description:l})},Ae=function(){const{total:e}=(0,R.Z)(),t=(s=e,Number.isInteger(s)?0===s?(0,n.__)("No issues to resolve 🎉","google-listings-and-ads"):(0,n.sprintf)(
// translators: %d: number of unsolved Merchant Center issues, with minimum value of 1.
(0,n._n)("%d issue to resolve","%d issues to resolve",s,"google-listings-and-ads"),s):"");var s;return(0,a.createElement)(Pe,{title:(0,n.__)("Feed setup:","google-listings-and-ads"),icon:(0,a.createElement)(B.Z,{size:24}),label:(0,a.createElement)("span",{className:"gla-success"},(0,n.__)("Free listings setup completed","google-listings-and-ads")),description:t})},Re=()=>{const e=(0,V.Z)("getMCReviewRequest");if(!e.hasFinishedResolution||!e.data?.status)return null;const t=W[e.data.status];return t?(0,a.createElement)(Pe,{className:"gla-account-status",title:(0,n.__)("Account status:","google-listings-and-ads"),icon:t.icon,label:t.status,description:t.statusDescription}):null},Fe=()=>{const{hasFinishedResolution:e,data:t}=(0,Se.Z)();return(0,a.createElement)(i.Card,{className:"gla-product-statistics"},(0,a.createElement)(i.CardHeader,{justify:"normal"},(0,a.createElement)(i.FlexItem,null,(0,a.createElement)(k.Z,{variant:"title-small",as:"h2"},(0,n.__)("Overview","google-listings-and-ads"))),(0,a.createElement)(Ze,null)),(0,a.createElement)(i.CardBody,{className:"gla-product-statistics__summaries",size:null},!e&&(0,a.createElement)(m.SummaryListPlaceholder,{numberOfItems:5}),e&&t&&(0,a.createElement)(m.SummaryList,null,(()=>[(0,a.createElement)(m.SummaryNumber,{key:"active",label:(0,n.__)("Active","google-listings-and-ads"),value:t.statistics.active}),(0,a.createElement)(m.SummaryNumber,{key:"expiring",label:(0,n.__)("Expiring","google-listings-and-ads"),value:t.statistics.expiring}),(0,a.createElement)(m.SummaryNumber,{key:"pending",label:(0,n.__)("Pending","google-listings-and-ads"),value:t.statistics.pending}),(0,a.createElement)(m.SummaryNumber,{key:"disapproved",label:(0,n.__)("Disapproved","google-listings-and-ads"),value:t.statistics.disapproved}),(0,a.createElement)(m.SummaryNumber,{key:"not_synced",label:(0,n.__)("Not Synced","google-listings-and-ads"),value:t.statistics.not_synced})]))),(0,a.createElement)(i.CardFooter,{gap:0},(0,a.createElement)(Ae,null),(0,a.createElement)(qe,null),(0,a.createElement)(Re,null)))},Le=s(279),Ge=s(1416),De=()=>{const{hasFinishedResolution:e,data:t}=(0,Se.Z)(),[s,i]=(0,a.useState)(!1),r=(0,l.getQuery)()?.guide===_.fL.SUBMISSION_SUCCESS,c=(0,Ge.Z)();return(0,a.useEffect)((()=>{if(!s){const e=Ee.Z.get(_.dA.CAN_ONBOARDING_SETUP_CES_PROMPT_OPEN);i(!r&&e&&c)}}),[r,s,c]),(0,a.createElement)(a.Fragment,null,(0,a.createElement)(o.Z,null),r&&(0,a.createElement)(Ne,null),s&&(0,a.createElement)(Ce.Z,{label:(0,n.__)("How easy was it to set up Google Listings & Ads?","google-listings-and-ads"),secondLabel:(0,n.__)("How easy was it to understand the requirements for the Google Listings & Ads setup?","google-listings-and-ads"),eventContext:_.fL.SUBMISSION_SUCCESS}),(0,a.createElement)("div",{className:"gla-product-feed"},!e&&(0,a.createElement)(Le.Z,null),e&&!t&&(0,n.__)("An error occurred while retrieving your product feed. Please try again later.","google-listings-and-ads"),e&&t&&(0,a.createElement)(a.Fragment,null,(0,a.createElement)(Fe,null),(0,a.createElement)(K,null),(0,a.createElement)(ie,{trackEventReportId:"product-feed"}))))}}}]);