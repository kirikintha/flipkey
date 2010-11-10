<?php
/**
 * This is the template file for all flipkey widgets.
 * More documentation to come.
 */
?>
<div id="flipkey-widget-<?php print $widget['propertyid']; ?>" class="flipkey-widget">
  <?php if (!isset($widget['error'])): ?>
  <div id="normal_rating">
    <span class="average-rating-label">Average Rating</span>
    <span class="rating-d">
      <span style="width:<?php print $widget['stats']['data']['width']; ?>px;"><?php print $widget['stats']['rating']; ?></span> of <?php print $widget['stats']['data']['max']; ?>
    </span>
  </div>
  <div class="paging-top">
    <span><a id="show-hide-reviews" name="show-hide-reviews">Click To View</a></span>
  </div>
  <div class="body_review_container">
    <?php foreach ($widget['reviews'] as $id => $row): ?>
      <div class="body_review">
        <h3 class="review-title">"<?php print $row['title']; ?>"</h3>
        <span class="rating-a">
          <span style="width: <?php print $row['data']['width']; ?>px;"><?php print $row['rating']; ?></span> of <?php print $widget['stats']['data']['max']; ?>
        </span>
        <p class="review_text"><?php print $row['text']; ?></p>
        <?php if (!empty($row['mgrtext'])): ?>
          <p class="manager_header"><strong>Manager Response:</strong></p>
          <p class="response_text"><em><?php print $row['mgrtext']; ?></em></p>
        <?php endif; ?>
        <span class="advanced_review" style="visibility: visible; float: left;">
          <strong><a target="_blank" href="<?php print $row['advancedurl']; ?>">Read Advanced Review</a></strong>
    	</span>
        <span style="float: right;" class="review_heading_span">
          -<?php print $row['displayname']; ?> on <?php print $row['fdate']; ?>
        </span>
        <div class="clearfix">&nbsp;</div>
      </div>
    <?php endforeach; ?>
  </div>
  <div class="paging-bottom">
    <span><a id="show-hide-reviews" name="show-hide-reviews">Click To View</a></span>
  </div>
  <?php else: ?>
    <div class="flipkey-error">
      <?php print $widget['error']; ?>
    </div>
  <?php endif; ?>
</div>