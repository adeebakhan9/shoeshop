<script type="text/javascript">

   <!--
      // Form validation code will come here.
      function validate()
      {
      
         if( document.enquiry_form.name.value == "" )
         {
            alert( "Please provide your name!" );
            document.enquiry_form.name.focus() ;
            return false;
         }
         
         
         
         if( document.enquiry_form.email.value == "" )
         {
            alert( "Please provide your Email!" );
            document.enquiry_form.email.focus() ;
            return false;
         }
          
           if( document.enquiry_form.comment.value == "" )
         {
            alert( "Please provide your Phone Number!" );
            document.enquiry_form.comment.focus() ;
            return false;
         }
         
        
         
        
         return( true );
      }
      
      
     
      
   //-->
</script>

<div class="box-container">
  <!-- Sidebar -->
  <!-- /Sidebar -->
  <!-- Content Center -->
  <div id="content-center">
    
    <div id="post-65" class="post-65 post type-post status-publish format-standard hentry category-design category-development category-uncategorized">
      <div id="comments" class="comment-message">
                              
                    <p><?php echo $this->session->flashdata('msg_sent'); ?></p>                
                              
  <div id="comment-message" class="comment-message">
    <div id="respond" class="comment-respond">
      <h3 id="reply-title" class="comment-reply-title"><div class="title">Contact Us</div> <small><a rel="nofollow" id="cancel-comment-reply-link" href="/metrodir/2013/07/25/blog-post-title-goes-here-2/#respond" style="display:none;">Cancel reply</a></small></h3>
									  <form action="<?php echo base_url();?>/index.php/Home/contact_us" method="post"  name="enquiry_form" class="comment-form" id="enquiry_form" onsubmit="return(validate());">
									    <input id="author" class="text-input-grey one-line" name="name" type="text" value="" size="30" aria-required='true' placeholder="Name*"/>
  <input id="email" class="text-input-grey one-line" name="email" type="text" value="" size="30" aria-required='true' placeholder="Email*" /><div class="clear"></div>
<div class="clear"></div>
												  <textarea class="text-input-grey comment-message-main"  name="comment" cols="45" rows="8" aria-required="true" placeholder="Comment..."></textarea><div class="clear"></div>						
						  <p class="form-submit"><input name="submit" type="submit" id="button-2-green" class="submit" value="Post Comment" /> <input type='hidden' name='comment_post_ID' value='65' id='comment_post_ID' />
  <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
  </p>					</form>
		  </div><!-- #respond -->
    </div>                </div>
              
    </div>
  
  </div><!-- /Content Center -->
  
  <div class="clear"></div>
  
  </div>