<div class="share-block">
    <span>Share on: </span>
    <div class="share-block-items">
        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode(get_the_permalink()) ?>">Facebook</a>
        <a target="_blank" href="https://twitter.com/intent/tweet?text=Hey%2C+check+out+this+cool+site+I+found%3A+www.domain.com+%23Topic+via%40my_x_twitter_name+<?= urlencode(get_the_permalink()) ?>">X</a>
        <a target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url=<?= urlencode(get_the_permalink()) ?>">Linkedin</a>
        <a target="_blank" href="https://api.whatsapp.com/send?text=<?= urlencode(get_the_title()) ?>%20<?= urlencode(get_the_permalink()) ?>">WhatsApp</a>
        <a target="_blank" href="https://t.me/share/url?url=<?= urlencode(get_the_permalink()) ?>&text=<?= urlencode(get_the_title()) ?>">Telegram</a>
    </div>
</div> 