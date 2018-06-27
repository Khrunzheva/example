var total = 0;
function add_new_image(){
   total++;
   $('<tr>')
   .attr('id','tr_image_'+total)
   .css({lineHeight:'20px',verticalAlign:'top'})
   .append (
       $('<td>')
       .attr('id','td_title_'+total)
       .css({paddingRight:'5px',paddingBottom:'15px',width:'200px'})
       .append(
           $('<input type="text" />')
           .css({width:'200px'})
           .attr('id','input_tit_'+total)
           .attr('name','input_tit_'+total)
           //.attr('value'б )
       )                                                        
    )
    .append(
   $('<td>')
   .attr('id','td_ name_'+total)
   .css({paddingRight:'5px',width:'40px'})
   .append(
       $('<select name="grade"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select>')
       .css({width:'40px'})
       .attr('id','name_'+total)
       .attr('name','name_'+total)
    )                              
)
    .append(
        $('<td>')
        .css({width:'60px'})
        .append(
           $('<span id="progress_'+total+'" class="padding5px"><a href="#" onclick="$(\'#tr_image_'+total+'\').remove();" class="ico_delete"><img src="/images/delete.png" alt="del" border="0" width="20px" height="20px"></a></span>')
         )
     )
     .appendTo('#table_container');                 
}
$(document).ready(function() {
    add_new_image();
});
var tot = 0;
function add_new_image1(){
   tot++;
   $('<tr>')
   .attr('id','tr_image_'+tot)
   .css({lineHeight:'20px',verticalAlign:'top'})
   .append (
       $('<td>')
       .attr('id','td_title_'+tot)
       .css({paddingRight:'5px',paddingBottom:'15px',width:'200px'})
       .append(
           $('<input type="text" />')
           .css({width:'200px'})
           .attr('id','input_title_'+tot)
           .attr('name','input_title_'+tot)
       )                              
                               
    )
    .append(
        $('<td>')
        .css({width:'60px'})
        .append(
           $('<span id="progress_'+tot+'" class="padding5px"><a href="#" onclick="$(\'#tr_image_'+tot+'\').remove();" class="ico_delete"><img src="/images/delete.png" alt="del" border="0" width="20px" height="20px"></a></span>')
         )
     )
     .appendTo('#table_container1');                 
}
$(document).ready(function() {
    add_new_image1();
});