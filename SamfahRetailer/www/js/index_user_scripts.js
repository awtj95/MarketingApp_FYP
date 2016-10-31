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
    
        /* button  #register */
    $(document).on("click", "#register", function(evt)
    {
         /*global activate_page */
         activate_page("#register_form"); 
         return false;
    });
    
        /* button  #submit */
    
    
        /* button  #back */
    $(document).on("click", "#back", function(evt)
    {
         /*global activate_page */
         activate_page("#mainpage"); 
         return false;
    });
    
        /* button  #submit */
    
    
        /* button  #back */
    $(document).on("click", "#back", function(evt)
    {
         /*global activate_page */
         activate_page("#mainpage"); 
         return false;
    });
    
        /* button  #logout */
    
    
        /* button  #login */
    $(document).on("click", "#login", function(evt)
    {
         /*global activate_page */
         activate_page("#main_menu"); 
         return false;
    });
    
        /* button  #sidemenu */
    $(document).on("click", "#sidemenu", function(evt)
    {
         /*global uib_sb */
         /* Other possible functions are: 
           uib_sb.open_sidebar($sb)
           uib_sb.close_sidebar($sb)
           uib_sb.toggle_sidebar($sb)
            uib_sb.close_all_sidebars()
          See js/sidebar.js for the full sidebar API */
        
         uib_sb.toggle_sidebar($(".uib_w_56"));  
         return false;
    });
    
        /* button  logout */
    $(document).on("click", ".uib_w_65", function(evt)
    {
         /*global activate_page */
         activate_page("#mainpage"); 
         return false;
    });
    
        /* button  #logout */
    
    
        /* button  #sidemenu */
    $(document).on("click", "#sidemenu", function(evt)
    {
         /*global uib_sb */
         /* Other possible functions are: 
           uib_sb.open_sidebar($sb)
           uib_sb.close_sidebar($sb)
           uib_sb.toggle_sidebar($sb)
            uib_sb.close_all_sidebars()
          See js/sidebar.js for the full sidebar API */
        
         uib_sb.toggle_sidebar($(".uib_w_56"));  
         return false;
    });
    
        /* button  #logout */
    
    
        /* button  #logout */
    $(document).on("click", "#logout", function(evt)
    {
         /*global activate_page */
         activate_page("#mainpage"); 
         return false;
    });
    
        /* button  #signin */
    $(document).on("click", "#signin", function(evt)
    {
         /*global activate_page */
         activate_page("#login_page"); 
         return false;
    });
    
        /* button  #home */
    
    
        /* button  #account */
    
    
        /* button  #back */
    $(document).on("click", "#back", function(evt)
    {
         /*global activate_page */
         activate_page("#main_menu"); 
         return false;
    });
    
        /* button  #back */
    $(document).on("click", "#back", function(evt)
    {
         /*global activate_page */
         activate_page("#main_menu"); 
         return false;
    });
    
        /* button  #back */
    $(document).on("click", "#back", function(evt)
    {
         /*global activate_page */
         activate_page("#main_menu"); 
         return false;
    });
    
        /* button  #back */
    $(document).on("click", "#back", function(evt)
    {
         /*global activate_page */
         activate_page("#main_menu"); 
         return false;
    });
    
        /* button  #back */
    $(document).on("click", "#back", function(evt)
    {
         /*global activate_page */
         activate_page("#main_menu"); 
         return false;
    });
    
        /* button  #back */
    $(document).on("click", "#back", function(evt)
    {
         /*global activate_page */
         activate_page("#main_menu"); 
         return false;
    });
    
        /* button  #back */
    $(document).on("click", "#back", function(evt)
    {
         /*global activate_page */
         activate_page("#main_menu"); 
         return false;
    });
    
        /* button  #profile */
    $(document).on("click", "#profile", function(evt)
    {
         /*global activate_page */
         activate_page("#view_profile"); 
         return false;
    });
    
        /* button  #addproduct */
    $(document).on("click", "#addproduct", function(evt)
    {
         /*global activate_page */
         activate_page("#add_product"); 
         return false;
    });
    
        /* button  #addpromotion */
    $(document).on("click", "#addpromotion", function(evt)
    {
         /*global activate_page */
         activate_page("#add_promotion"); 
         return false;
    });
    
        /* button  #userlogin */
    $(document).on("click", "#userlogin", function(evt)
    {
         /*global activate_page */
         activate_page("#user_login"); 
         return false;
    });
    
        /* button  #productlist */
    $(document).on("click", "#productlist", function(evt)
    {
         /*global activate_page */
         activate_page("#product_list"); 
         return false;
    });
    
        /* button  #promotionlist */
    $(document).on("click", "#promotionlist", function(evt)
    {
         /*global activate_page */
         activate_page("#promotion_list"); 
         return false;
    });
    
        /* button  #setting */
    
    
        /* button  #setting */
    
    
        /* button  #setting */
    
    
        /* button  #setting */
    
    
        /* button  #home */
    $(document).on("click", "#home", function(evt)
    {
         /*global uib_sb */
         /* Other possible functions are: 
           uib_sb.open_sidebar($sb)
           uib_sb.close_sidebar($sb)
           uib_sb.toggle_sidebar($sb)
            uib_sb.close_all_sidebars()
          See js/sidebar.js for the full sidebar API */
        
         uib_sb.toggle_sidebar($(".uib_w_56"));  
         return false;
    });
    
        /* button  Product */
    $(document).on("click", ".uib_w_59", function(evt)
    {
         /*global activate_page */
         activate_page("#add_product"); 
         return false;
    });
    
        /* button  Product List */
    $(document).on("click", ".uib_w_63", function(evt)
    {
         /*global activate_page */
         activate_page("#product_list"); 
         return false;
    });
    
        /* button  Promotion */
    $(document).on("click", ".uib_w_60", function(evt)
    {
         /*global activate_page */
         activate_page("#add_promotion"); 
         return false;
    });
    
        /* button  Promotion List */
    $(document).on("click", ".uib_w_64", function(evt)
    {
         /*global activate_page */
         activate_page("#promotion_list"); 
         return false;
    });
    
        /* button  User Login */
    $(document).on("click", ".uib_w_61", function(evt)
    {
         /*global activate_page */
         activate_page("#user_login"); 
         return false;
    });
    
        /* button  #back */
    $(document).on("click", "#back", function(evt)
    {
         /*global activate_page */
         activate_page("#main_menu"); 
         return false;
    });
    
        /* button  #setting */
    $(document).on("click", "#setting", function(evt)
    {
         /*global activate_page */
         activate_page("#setting_page"); 
         return false;
    });
    
        /* button  #account */
    $(document).on("click", "#account", function(evt)
    {
         /*global activate_page */
         activate_page("#setting_page"); 
         return false;
    });
    
        /* button  Upload Promotion */
    
    
        /* button  Upload Promotion */
    $(document).on("click", ".uib_w_91", function(evt)
    {
        /* your code goes here */ 
         return false;
    });
    
        /* button  #update */
    $(document).on("click", "#update", function(evt)
    {
         /*global activate_page */
         activate_page("#setting_page"); 
         return false;
    });
    
        /* button  #back */
    $(document).on("click", "#back", function(evt)
    {
         /*global activate_page */
         activate_page("#main_menu"); 
         return false;
    });
    
        /* button  #backtohome */
    $(document).on("click", "#backtohome", function(evt)
    {
         /*global activate_page */
         activate_page("#mainpage"); 
         return false;
    });
    
        /* button  #submit */
    $(document).on("click", "#submit", function(evt)
    {
        /* your code goes here */ 
         return false;
    });
    
    }
 document.addEventListener("app.Ready", register_event_handlers, false);
})();
