<div class="msg" id="cmt{$comment.ID}">
 <div class="msgimg"><a name="cmt{$comment.ID}"><img class="avatar" src="{$comment.Author.Avatar}" alt=""/></a></div>
 
            <div class="msgtxt">
              <div class="msgtxtbogy">
              <div class="msgname"><span class="dot">{$key+1}楼</span>&nbsp;<a href="{$comment.Author.HomePage}" rel="nofollow" target="_blank">{$comment.Author.Name}</a>&nbsp;&nbsp;<span>{$comment.Time()}&nbsp;<a href="#comment" onclick="RevertComment('{$comment.ID}')">回复该评论</a></span></div>
              <div class="msgarticle">{$comment.Content}
{foreach $comment.Comments as $comment}
	{template:comment}
{/foreach}	
              </div>
            </div>
          </div>
<div class="clear"></div>
</div>