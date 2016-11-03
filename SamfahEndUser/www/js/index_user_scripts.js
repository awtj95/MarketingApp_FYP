/*jshint browser:true */
/*global $ */(function()
{
 "use strict";
 /*
   hook up event handlers 
 */
 function register_event_handlers()
 {
    
    
     /* button  #register */
    $(document).on("click", "#register", function(evt)
    {
         /*global activate_page */
         activate_page("#register_form"); 
         return false;
    });
    
        /* button  #back */
    $(document).on("click", "#back", function(evt)
    {
         /*global activate_page */
         activate_page("#mainpage"); 
         return false;
    });
    
        /* button  #home */
    $(document).on("click", "#home", function(evt)
    {
         /*global activate_page */
         activate_page("#mainpage"); 
         return false;
    });
    
        /* button  Submit */
    $(document).on("click", ".uib_w_14", function(evt)
    {
         /*global activate_page */
         activate_page("#register_success"); 
         return false;
    });
    
        /* button  #loginpage */
    $(document).on("click", "#loginpage", function(evt)
    {
         /*global activate_page */
         activate_page("#main_menu"); 
         return false;
    });
    
        /* button  #login */
    $(document).on("click", "#login", function(evt)
    {
         /*global activate_page */
         activate_page("#loginpage"); 
         return false;
    });
    
        /* button  #login */
    $(document).on("click", "#login", function(evt)
    {
         /*global activate_page */
         activate_page("#loginpage"); 
         return false;
    });
    
        /* button  #menu_list */
    $(document).on("click", "#menu_list", function(evt)
    {
         /*global uib_sb */
         /* Other possible functions are: 
           uib_sb.open_sidebar($sb)
           uib_sb.close_sidebar($sb)
           uib_sb.toggle_sidebar($sb)
            uib_sb.close_all_sidebars()
          See js/sidebar.js for the full sidebar API */
        
         uib_sb.toggle_sidebar($(".uib_w_33"));  
         return false;
    });
    
        /* button  #menu_list */
    $(document).on("click", "#menu_list", function(evt)
    {
         /*global uib_sb */
         /* Other possible functions are: 
           uib_sb.open_sidebar($sb)
           uib_sb.close_sidebar($sb)
           uib_sb.toggle_sidebar($sb)
            uib_sb.close_all_sidebars()
          See js/sidebar.js for the full sidebar API */
        
         uib_sb.toggle_sidebar($(".uib_w_33"));  
         return false;
    });
            

        /* button  #search */
    $(document).on("click", "#search", function(evt)
    {
         /*global activate_page */
         activate_page("#search_retailer"); 
        
    });
    
    }
 document.addEventListener("app.Ready", register_event_handlers, false);
})();
