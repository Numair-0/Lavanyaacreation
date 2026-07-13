<?php
/**
 * LAVANYAA CREATION — Footer
 */
require_once __DIR__ . '/../functions/settings.php';
require_once __DIR__ . '/../functions/categories.php';

$footer_cats = getAllCategories();
$s_address   = getSetting('address');
$s_phone1    = getSetting('phone1');
$s_phone2    = getSetting('phone2');
$s_email     = getSetting('email');
$s_wa        = getSetting('whatsapp');
$s_ig        = getSetting('instagram','#');
$s_fb        = getSetting('facebook','#');
$s_yt        = getSetting('youtube','#');
?>

<footer class="lc-footer">
  <div class="lc-footer-inner">

    <!-- Brand -->
    <div class="lc-footer-col">
      <div class="lc-footer-logo">
        <a href="<?php echo BASE_URL; ?>/index.php">
          <img src="<?php echo BASE_URL; ?>/assets/images/lc-logo.png" alt="Lavanyaa Creation">
        </a>
      </div>
      <p class="lc-footer-about">A distinguished name in premium furniture design and bespoke interior solutions. Transforming modern environments since 2019.</p>
      <div class="lc-footer-social">
        <a href="<?php echo htmlspecialchars($s_fb); ?>" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
        <a href="<?php echo htmlspecialchars($s_ig); ?>" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
        <a href="<?php echo htmlspecialchars($s_yt); ?>" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
        <a href="https://wa.me/<?php echo $s_wa; ?>" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
      </div>
    </div>

    <!-- Quick Links -->
    <div class="lc-footer-col">
      <h5>Navigate</h5>
      <div class="lc-footer-links">
        <a href="<?php echo BASE_URL; ?>/index.php">Home</a>
        <a href="<?php echo BASE_URL; ?>/about.php">Our Story</a>
        <a href="<?php echo BASE_URL; ?>/category.php?cat=all">Catalogue</a>
        <a href="<?php echo BASE_URL; ?>/contact.php">Contact</a>
        <a href="<?php echo BASE_URL; ?>/privacy-policy.php">Privacy Policy</a>
        <a href="<?php echo BASE_URL; ?>/terms-conditions.php">Terms &amp; Conditions</a>
      </div>
    </div>

    <!-- Collections -->
    <div class="lc-footer-col">
      <h5>Collections</h5>
      <div class="lc-footer-links">
        <?php foreach ($footer_cats as $c): ?>
        <a href="<?php echo BASE_URL; ?>/category.php?cat=<?php echo urlencode($c['slug']); ?>"><?php echo htmlspecialchars($c['name']); ?></a>
        <?php endforeach; ?>
      </div>
    </div>
 
    <!-- Services -->
    <div class="lc-footer-col">
      <h5>Services</h5>
      <div class="lc-footer-links">
        <a href="#">Bespoke Furniture</a>
        <a href="#">Interior Consultation</a>
        <a href="#">Commercial Projects</a>
        <a href="#" data-bs-toggle="modal" data-bs-target="#quoteInquiryModal">Bulk Enquiry</a>
        <a href="#">Delivery &amp; Installation</a>
        <a href="#">After-Sales Care</a>
      </div>
    </div>

    <!-- Contact -->
    <div class="lc-footer-col">
      <h5>Get in Touch</h5>
      <div class="lc-footer-contact">
        <?php if ($s_address): ?>
        <div class="lc-footer-ci"><i class="bi bi-geo-alt"></i><span><?php echo htmlspecialchars($s_address); ?></span></div>
        <?php endif; ?>
        <div class="lc-footer-ci">
          <i class="bi bi-telephone"></i>
          <span>
            <?php if ($s_phone1): ?><a href="tel:<?php echo preg_replace('/\s/','',$s_phone1); ?>"><?php echo $s_phone1; ?></a><br><?php endif; ?>
            <?php if ($s_phone2): ?><a href="tel:<?php echo preg_replace('/\s/','',$s_phone2); ?>"><?php echo $s_phone2; ?></a><?php endif; ?>
          </span>
        </div>
        <?php if ($s_email): ?>
        <div class="lc-footer-ci"><i class="bi bi-envelope"></i><span><a href="mailto:<?php echo $s_email; ?>"><?php echo $s_email; ?></a></span></div>
        <?php endif; ?>
        <div class="lc-footer-ci"><i class="bi bi-whatsapp"></i><span><a href="https://wa.me/<?php echo $s_wa; ?>" target="_blank" rel="noopener">Chat on WhatsApp</a></span></div>
      </div>
    </div>

  </div>

  <div class="lc-footer-bottom">
    <p style="margin:0;">&copy; <?php echo date('Y'); ?> Lavanyaa Creation. All Rights Reserved.</p>
    <p style="margin:0;">Designed &amp; Developed by <a href="https://www.topnexmedia.com/" target="_blank" rel="noopener">Topnex Media</a></p>
  </div>
</footer>

<a href="https://wa.me/<?php echo $s_wa; ?>" target="_blank" rel="noopener" class="lc-whatsapp-float" aria-label="WhatsApp">
  <i class="bi bi-whatsapp"></i>
</a>

<?php include __DIR__ . '/quote-modal.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/main.js"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/cart.js"></script>
