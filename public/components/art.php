<?php
function artCollectionHtml($d) {
    $new = "";
    if (date('Y') === $d['addedyear']) {
      $new = "<div class=\"image-new\"></div>";
    }

    $html = "
    <div onclick=\"go({$d['id']})\" class=\" {$d['class']} h-full\">
    <div class=\"item h-full\">
      <div class=\"image h-full\">
        <div class=\"zoom-in h-full\">
          <img class=\"w-full h-full\" src=\"../static{$d['galleryimg']}/gallery.jpg\" alt=\"{$d['title']}\">
          <div class=\"image-text\">
            <p class=\"text-sm\">{$d['title']}</p>
            <p class=\"text-xs\" >{$d['name']}</p>
          </div>

          $new
        </div>
      </div>
    </div>   
  </div> 
  ";
  return $html;
}
