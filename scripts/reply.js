$('document').ready(PageLoaded);

var lastClick = null;

function VerifyEmpty(event){
  var textarea = $(this).find("textarea");
  var text = textarea.val().trim();

  if(text.length == 0){
    event.preventDefault();
  }
  textarea.val(text);
}

function ReplyClick(){
  ClearLast();
  var commentId = $(this).attr('commentId');
  var form = $('<form action="../action/addAnswer.php" method="post" > </form>');
  var textS = $('<textarea placeholder="Write here..." name="content"  rows="4" cols="50"></textarea>');
  var textH = $('<input type="hidden" name="commentId" value="'+commentId+'"> </input>');

  var btn = $('<button> Send </button>');

  form.append(textS).append(textH);
  form.append(btn);

  form.submit(VerifyEmpty);

  $(this).parent().append(form);

  lastClick = form;
}

function ClearLast(){
  if(lastClick)
    lastClick.remove();
}

function ClearComment(){
  var idC = $(this).attr("commentid");
  $(this).parent().remove();
  $.post("../action/removeComment.php",
    {id : idC}
  );  
}

function ClearAnswer(){
  var idC = $(this).attr("answerid");
  $(this).parent().remove();
 $.post("../action/removeAnswer.php",
    { id : idC}
  );
}

function PageLoaded(){
  $('a.reply').on("click", ReplyClick);
  $('form.review').submit(VerifyEmpty);
  $('a.delete-answer').on('click',ClearAnswer);
  $('a.delete-comment').on('click',ClearComment);

}
