<?php
function isMobile() {
return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|
palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>

<?php if(isMobile()): ?>
<!-- Ipad-300x250 -->
<script type='text/javascript'>
GA_googleFillSlot("Ipad-300x250");
</script>
<?php else:
echo "Desktop";
endif; ?>