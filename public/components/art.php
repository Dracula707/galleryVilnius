<?php
function artCollectionHtml($d) {
    $html = "
    <div onclick=\"go({$d['id']})\" class=\" {$d['class']} h-full\">
    <div class=\"item h-full\">
      <div class=\"image h-full\">
        <div class=\"zoom-in h-full\">
          <img class=\"w-full h-full\" src=\"../static{$d['galleryimg']}\" alt=\"!\">
          <div class=\"image-text\">
            <p class=\"text-sm\">{$d['title']}</p>
            <p class=\"text-xs\" >{$d['name']}</p>
          </div>
        </div>
      </div>
    </div>   
  </div> 
  ";
  return $html;
}
