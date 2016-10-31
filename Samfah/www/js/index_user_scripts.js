/*jshint browser:true */
/*global $ */(function()
{
 "use strict";
 /*
   hook up event handlers 
 */
 function register_event_handlers()
 {
    
    
     /* button  Login */
    $(document).on("click", ".uib_w_4", function(evt)
    {
        /* your code goes here */ 
         return false;
    });
    
        /* button  #retailerlist */
    $(document).on("click", "#retailerlist", function(evt)
    {
         /*global activate_page */
         activate_page("#retailer_list"); 
         return false;
    });
    
        /* button  #retailerregister */
    $(document).on("click", "#retailerregister", function(evt)
    {
         /*global activate_page */
         activate_page("#retailer_register"); 
         return false;
    });
    
        /* button  #retailerrequest */
    $(document).on("click", "#retailerrequest", function(evt)
    {
         /*global activate_page */
         activate_page("#retailer_request"); 
         return false;
    });
    
        /* button  #enduser */
    $(document).on("click", "#enduser", function(evt)
    {
         /*global activate_page */
         activate_page("#end_user_list"); 
         return false;
    });
    
        /* button  #login */
    $(document).on("click", "#login", function(evt)
    {
         /*global activate_page */
         activate_page("#main_page"); 
         return false;
    });
    
        /* button  #back */
    
    
        /* button  #back */
    $(document).on("click", "#back", function(evt)
    {
         /*global activate_page */
         activate_page("#main_page"); 
         return false;
    });
    
        /* button  #back */
    $(document).on("click", "#back", function(evt)
    {
         /*global activate_page */
         activate_page("#main_page"); 
         return false;
    });
    
        /* button  .uib_w_17 */
    $(document).on("click", ".uib_w_17", function(evt)
    {
         /*global activate_page */
         activate_page("#main_page"); 
         return false;
    });
    
        /* button  Button */
    $(document).on("click", ".uib_w_18", function(evt)
    {
         /*global activate_page */
         activate_page("#main_page"); 
         return false;
    });
    
        /* button  #logout */
    $(document).on("click", "#logout", function(evt)
    {
         /*global activate_page */
         activate_page("#mainpage"); 
         return false;
    });
    
        /* button  #backmain */
    $(document).on("click", "#backmain", function(evt)
    {
         /*global activate_page */
         activate_page("#main_page"); 
         return false;
    });
    
        /* button  #register */
    $(document).on("click", "#register", function(evt)
    {
         /*global activate_page */
         activate_page("#reigister_success"); 
         return false;
    });
    
    }
 document.addEventListener("app.Ready", register_event_handlers, false);
})();
