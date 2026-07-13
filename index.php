<?php
/**
 * LAVANYAA CREATION — Homepage
 */
require_once __DIR__ . '/config/db.php';
require_once __DIR__ . '/functions/products.php';
require_once __DIR__ . '/functions/categories.php';
require_once __DIR__ . '/functions/settings.php';
require_once __DIR__ . '/functions/uploads.php';

$page_title   = 'Lavanyaa Creation — Premium Furniture Services';
$page_desc    = 'Distinguished name in premium furniture design and bespoke interior solutions since 2019. Transforming residences, offices and hospitality spaces across India.';
$active_page  = 'index';

$hero_kicker  = getSetting('hero_kicker', 'Est. 2019 · Premium Furniture Services');
$hero_heading = getSetting('hero_heading', "Crafted for the\nExtraordinary");
$hero_subheading = getSetting('hero_subheading', 'Premium furniture design and bespoke interior solutions for luxury residences, corporate offices, and world-class hospitality spaces.');
$hero_btn_text = getSetting('hero_button_text', 'Explore Collections');
$hero_btn_link = getSetting('hero_button_link', 'category.php?cat=all');
$hero_second_btn_text = getSetting('hero_secondary_button_text', 'Request a Quote');
$hero_second_btn_link = getSetting('hero_secondary_button_link', '#quote');
$about_title = getSetting('about_preview_title', 'A Legacy Built on Craftsmanship and Vision');
$about_preview = getSetting('about_preview', 'Lavanyaa Creation is a distinguished name in the world of premium furniture design and bespoke interior solutions, specializing in transforming modern environments into sophisticated, functional, and inspiring spaces.');
$about_quote = getSetting('about_preview_quote', 'Great spaces deserve exceptional furniture — that belief drives everything we create.');
$why_title = getSetting('why_choose_title', 'Why Lavanyaa Creation');
$why_items = getJsonSetting('why_choose_items', []);
$inquiry_title = getSetting('inquiry_section_title', 'Transform Your Space Today');
$inquiry_text = getSetting('inquiry_section_text', 'Share your vision with our design consultants. We will craft a bespoke furniture solution from concept to installation.');
$banners      = getHomepageBanners();
$banner       = $banners[0] ?? null;
$hero_img     = getImageUrl($banner['image'] ?? 'https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?w=1800&q=85');
$hero_title   = $banner['title'] ?? $hero_heading;
$hero_label   = $banner['label'] ?? $hero_kicker;
$hero_secondary_text = $banner['subtitle'] ?? 'Where Spaces Find Their Soul';
$hero_primary_text = $banner['btn1_text'] ?? $hero_btn_text;
$hero_primary_link = $banner['btn1_url'] ?? $hero_btn_link;
$hero_secondary_btn_text = $banner['btn2_text'] ?? $hero_second_btn_text;
$hero_secondary_btn_link = $banner['btn2_url'] ?? $hero_second_btn_link;
$featured     = getFeaturedProducts(8);
$categories   = getAllCategories();
$industries   = getIndustries();
$testimonials = getTestimonials(4);
if (empty($testimonials)) {
  $testimonials = [
    ['name' => 'Aarav & Meera Sharma', 'company' => 'Residential Interior Project', 'location' => 'Gurgaon', 'review' => 'The finish quality and attention to detail felt truly premium. Every piece was crafted to complement our home perfectly.', 'rating' => 5],
    ['name' => 'Nisha Rao', 'company' => 'Boutique Office Setup', 'location' => 'Mumbai', 'review' => 'Lavanyaa Creation made the entire process feel effortless. The furniture is elegant, durable, and beautifully tailored to our space.', 'rating' => 5],
    ['name' => 'Rajat Menon', 'company' => 'Hospitality Project', 'location' => 'Jaipur', 'review' => 'We appreciated the thoughtful design guidance and the polished execution from concept to installation.', 'rating' => 5],
    ['name' => 'Pooja Iyer', 'company' => 'Luxury Dining Renovation', 'location' => 'Bengaluru', 'review' => 'The craftsmanship exceeded expectations. Our new furniture gave the space a warm, sophisticated character instantly.', 'rating' => 5],
  ];
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>

<!-- ═══════════════════════════════════════
     HERO
════════════════════════════════════════ -->
<section class="lc-hero">
  <div class="lc-hero-bg" id="hero-bg" style="background-image:url('<?php echo htmlspecialchars($hero_img); ?>');"></div>
  <div class="lc-hero-overlay"></div>
  <div class="lc-hero-content">
    <div class="lc-hero-kicker lc-hero-reveal"><span></span><?php echo htmlspecialchars($hero_label); ?></div>
    <h1 class="lc-hero-reveal lc-hero-reveal-d1"><?php echo nl2br(htmlspecialchars($hero_title)); ?></h1>
    <p class="lc-hero-tagline lc-hero-reveal lc-hero-reveal-d2">Luxury furniture, crafted for spaces with presence.</p>
    <p class="lc-hero-sub lc-hero-reveal lc-hero-reveal-d3"><?php echo htmlspecialchars($hero_secondary_text); ?></p>
    <div class="lc-hero-btns lc-hero-reveal lc-hero-reveal-d4">
      <a href="<?php echo htmlspecialchars($hero_primary_link); ?>" class="btn-primary-lc"><?php echo htmlspecialchars($hero_primary_text); ?> <i class="bi bi-arrow-right"></i></a>
      <a href="<?php echo htmlspecialchars($hero_secondary_btn_link); ?>" class="btn-outline-lc"><?php echo htmlspecialchars($hero_secondary_btn_text); ?></a>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════
     MARQUEE
════════════════════════════════════════ -->
<div class="lc-marquee" aria-hidden="true">
  <div class="lc-marquee-track">
    <span>LAVANYAA CREATION</span><span class="dot">✦</span>
    <span>PREMIUM FURNITURE</span><span class="dot">✦</span>
    <span>BESPOKE INTERIORS</span><span class="dot">✦</span>
    <span>EST. 2019</span><span class="dot">✦</span>
    <span>PAN INDIA DELIVERY</span><span class="dot">✦</span>
    <span>LUXURY CRAFTSMANSHIP</span><span class="dot">✦</span>
    <span>LAVANYAA CREATION</span><span class="dot">✦</span>
    <span>PREMIUM FURNITURE</span><span class="dot">✦</span>
    <span>BESPOKE INTERIORS</span><span class="dot">✦</span>
    <span>EST. 2019</span><span class="dot">✦</span>
    <span>PAN INDIA DELIVERY</span><span class="dot">✦</span>
    <span>LUXURY CRAFTSMANSHIP</span><span class="dot">✦</span>
  </div>
</div>

<!-- ═══════════════════════════════════════
     BRAND INTRO NUMBERS
════════════════════════════════════════ -->
<div class="lc-brand-intro">
  <div class="lc-intro-grid">
    <div class="lc-intro-cell fade-up">
      <div class="num">5+</div>
      <h4>Years of Excellence</h4>
      <p>Established in 2019, crafting premium furniture with uncompromising quality standards.</p>
    </div>
    <div class="lc-intro-cell fade-up fade-up-d1">
      <div class="num">700+</div>
      <h4>Premium Products</h4>
      <p>An expansive catalogue spanning living, dining, bedroom, office and hospitality furniture.</p>
    </div>
    <div class="lc-intro-cell fade-up fade-up-d2">
      <div class="num">∞</div>
      <h4>Bespoke Possibilities</h4>
      <p>Every piece can be customised to your exact specifications — material, finish and dimension.</p>
    </div>
  </div>
</div>

<!-- ═══════════════════════════════════════
     COLLECTIONS GRID
════════════════════════════════════════ -->
<section class="lc-collections">
  <div class="lc-collections-hd">
    <div>
      <div class="lc-eyebrow fade-up">Our Collections</div>
      <h2 class="lc-heading fade-up fade-up-d1">Explore Every Space</h2>
    </div>
    <a href="<?php echo BASE_URL; ?>/category.php?cat=all" class="btn-outline-lc fade-up fade-up-d2">View All Collections <i class="bi bi-arrow-right"></i></a>
  </div>

  <?php
  $cat_imgs = [
    'living'    => 'https://plus.unsplash.com/premium_photo-1684338795288-097525d127f0?q=80&w=871',
    'bedroom'   => 'https://images.unsplash.com/photo-1680503146476-abb8c752e1f4?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    'dining'    => 'https://plus.unsplash.com/premium_photo-1684445034959-b3faeb4597d2?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    'office'    => 'https://images.unsplash.com/photo-1571624436279-b272aff752b5?q=80&w=872&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    'commercial'=> 'https://images.unsplash.com/photo-1591944173662-85fbc5a495a1?q=80&w=435&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    'decor'     => 'https://images.unsplash.com/photo-1532372576444-dda954194ad0?w=800&q=85',
  ];
  ?>
  <div class="lc-coll-grid">
    <?php foreach (array_slice($categories,0,5) as $i => $c):
      $imgUrl = getImageUrl($c['image'] ?? ($cat_imgs[$c['slug']] ?? 'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=800&q=85'));
    ?>
    <a href="<?php echo BASE_URL; ?>/category.php?cat=<?php echo urlencode($c['slug']); ?>" class="lc-coll-card fade-up fade-up-d<?php echo min($i+1,4); ?>">
      <img src="<?php echo htmlspecialchars($imgUrl); ?>" alt="<?php echo htmlspecialchars($c['name']); ?>" loading="<?php echo $i===0?'eager':'lazy'; ?>">
      <div class="lc-coll-overlay">
        <div class="lc-coll-name"><?php echo htmlspecialchars($c['name']); ?></div>
        <div class="lc-coll-cta">Explore <i class="bi bi-arrow-right"></i></div>
      </div>
    </a>
    <?php endforeach; ?>
  </div>
</section>

<!-- ═══════════════════════════════════════
     BRAND STORY
════════════════════════════════════════ -->
<section class="lc-story">
  <div class="lc-story-grid lc-container">
    <div class="lc-story-imgs fade-up">
      <div class="lc-story-year">
        <span class="y">2019</span>
        <span class="l">Founded</span>
      </div>
      <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=900&q=85" alt="Lavanyaa Creation Showroom" class="lc-story-img-main" loading="lazy">
      <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?w=700&q=85" alt="Luxury Interior" class="lc-story-img-accent" loading="lazy">
    </div>
    <div class="lc-story-copy fade-up fade-up-d2">
      <div class="lc-eyebrow">Our Philosophy</div>
      <h2 class="lc-heading"><?php echo htmlspecialchars($about_title); ?></h2>
      <div class="lc-divider"></div>
      <div class="lc-story-body">
        <p><?php echo htmlspecialchars($about_preview); ?></p>
        <div class="lc-story-quote">"<?php echo htmlspecialchars($about_quote); ?>"</div>
        <p>From corporate offices and luxury residences to hotels, restaurants, and large-scale commercial projects, we craft furniture that seamlessly blends aesthetics, comfort, and performance.</p>
        <p>Built on strong values, technical expertise, and years of industry experience, Lavanyaa Creation has established itself as a trusted partner for architects, designers, and clients seeking world-class furniture solutions.</p>
      </div>
      <div style="display:flex;gap:16px;flex-wrap:wrap;margin-top:36px;">
        <a href="<?php echo BASE_URL; ?>/about.php" class="btn-primary-lc">Our Story <i class="bi bi-arrow-right"></i></a>
        <a href="<?php echo BASE_URL; ?>/contact.php" class="btn-outline-lc">Get in Touch</a>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════
     FEATURED PRODUCTS
════════════════════════════════════════ -->
<?php if (!empty($featured)): ?>
<section class="lc-products-section">
  <div class="lc-products-hd">
    <div>
      <div class="lc-eyebrow fade-up">Editor's Choice</div>
      <h2 class="lc-heading fade-up fade-up-d1">Featured Creations</h2>
    </div>
    <a href="<?php echo BASE_URL; ?>/category.php?cat=all" class="btn-outline-lc fade-up fade-up-d2">View All <i class="bi bi-arrow-right"></i></a>
  </div>
  <div class="lc-products-grid" style="max-width:1380px;margin:0 auto;padding:0 24px;">
    <?php foreach ($featured as $i => $p):
      $img = getImageUrl($p['primary_image'] ?? 'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=800&q=80');
      $d   = 'fade-up-d'.(($i%4)+1);
    ?>
    <div class="lc-prod-card fade-up <?php echo $d; ?>">
      <a href="<?php echo BASE_URL; ?>/product.php?slug=<?php echo urlencode($p['slug']); ?>" class="lc-prod-img-wrap">
        <img src="<?php echo htmlspecialchars($img); ?>" alt="<?php echo htmlspecialchars($p['name']); ?>" loading="lazy">
        <?php if ($p['is_new']): ?>
        <span class="lc-prod-badge">New</span>
        <?php elseif ($p['is_bestseller']): ?>
        <span class="lc-prod-badge accent">Bestseller</span>
        <?php endif; ?>
      </a>
      <div class="lc-prod-body">
        <div class="lc-prod-meta"><?php echo htmlspecialchars($p['product_code']); ?> · <?php echo htmlspecialchars($p['category_name']??''); ?></div>
        <a href="<?php echo BASE_URL; ?>/product.php?slug=<?php echo urlencode($p['slug']); ?>" class="lc-prod-name"><?php echo htmlspecialchars($p['name']); ?></a>
        <p class="lc-prod-desc"><?php echo htmlspecialchars($p['short_desc'] ?? substr($p['description']??'',0,110)); ?></p>
        <div class="lc-prod-actions">
          <a href="https://wa.me/<?php echo getSetting('whatsapp','917042704454'); ?>?text=<?php echo rawurlencode("Hi! I'm interested in {$p['name']} (Code: {$p['product_code']}). Please share details."); ?>"
             target="_blank" class="btn-enquire"><i class="bi bi-whatsapp"></i> Enquire</a>
          <button class="btn-cart"
                  data-product-id="<?php echo $p['id']; ?>"
                  data-product-code="<?php echo htmlspecialchars($p['product_code']); ?>"
                  data-product-name="<?php echo htmlspecialchars($p['name']); ?>"
                  data-product-image="<?php echo htmlspecialchars($img); ?>"
                  aria-label="Add to cart">
            <i class="bi bi-bag-plus"></i>
          </button>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>
<?php endif; ?>

<!-- ═══════════════════════════════════════
     INDUSTRIES
════════════════════════════════════════ -->
<section class="lc-industries">
  <div class="lc-container">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:end;margin-bottom:0;">
      <div>
        <div class="lc-eyebrow fade-up">Sectors We Transform</div>
        <h2 class="lc-heading fade-up fade-up-d1">Spaces We Specialise In</h2>
        <div class="lc-divider fade-up fade-up-d2"></div>
        <p class="lc-sub fade-up fade-up-d3">From corporate campuses to boutique hospitality — complete furniture solutions for every premium environment.</p>
      </div>
      <div class="text-end fade-up fade-up-d2">
        <a href="#" class="btn-outline-lc" data-bs-toggle="modal" data-bs-target="#quoteInquiryModal">Bulk Project Enquiry <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
    <div class="lc-ind-grid" style="margin-top:52px;">
      <?php foreach ($industries as $i => $ind): $d='fade-up-d'.(($i%3)+1); ?>
      <div class="lc-ind-card fade-up <?php echo $d; ?>">
        <div class="lc-ind-icon"><?php echo $ind['icon']; ?></div>
        <h5><?php echo htmlspecialchars($ind['name']); ?></h5>
        <p><?php echo htmlspecialchars($ind['description']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════
     WHY LAVANYAA
════════════════════════════════════════ -->
<section class="lc-why">
  <div class="lc-why-inner">
    <div class="lc-eyebrow fade-up">Our Difference</div>
    <h2 class="lc-heading fade-up fade-up-d1" style="color:var(--white);margin-top:10px;"><?php echo htmlspecialchars($why_title); ?></h2>
    <div class="lc-why-grid">
      <?php foreach (array_slice($why_items, 0, 6) as $index => $item): $icon = ['bi-gem','bi-vector-pen','bi-building-check','bi-cpu','bi-truck','bi-shield-check'][$index] ?? 'bi-stars'; ?>
      <div class="lc-why-item fade-up fade-up-d<?php echo ($index % 3) + 1; ?>">
        <div class="lc-why-icon"><i class="bi <?php echo htmlspecialchars($icon); ?>"></i></div>
        <h4><?php echo htmlspecialchars($item['title'] ?? ''); ?></h4>
        <p><?php echo htmlspecialchars($item['description'] ?? ''); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════
     TESTIMONIALS
════════════════════════════════════════ -->
<?php if (!empty($testimonials)): ?>
<section class="lc-testimonials">
  <div class="lc-container">
    <div style="text-align:center;margin-bottom:0;">
      <div class="lc-eyebrow fade-up" style="justify-content:center;">Client Stories</div>
      <h2 class="lc-heading fade-up fade-up-d1" style="text-align:center;">What Our Clients Say</h2>
    </div>
    <div class="lc-test-grid">
      <?php foreach ($testimonials as $i => $t): $d='fade-up-d'.(($i%4)+1); ?>
      <div class="lc-test-card fade-up <?php echo $d; ?>">
        <div class="lc-test-quote">"</div>
        <div class="lc-test-stars"><?php for($r=0;$r<(int)$t['rating'];$r++) echo '★'; ?></div>
        <p class="lc-test-text"><?php echo htmlspecialchars(preg_replace('/nova\s*homz/i', 'Lavanyaa Creation', $t['review'])); ?></p>
        <div class="lc-test-name"><?php echo htmlspecialchars($t['name']); ?></div>
        <?php if ($t['company']): ?><div class="lc-test-company"><?php echo htmlspecialchars($t['company']); ?></div><?php endif; ?>
        <?php if ($t['location']): ?><div class="lc-test-company" style="color:var(--accent);"><i class="bi bi-geo-alt-fill me-1"></i><?php echo htmlspecialchars($t['location']); ?></div><?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ═══════════════════════════════════════
     PREMIUM CLIENTS
════════════════════════════════════════ -->
<section class="lc-clients">
  <div class="lc-clients-inner">
    <div style="text-align:center;">
      <div class="lc-eyebrow fade-up" style="justify-content:center;">Trusted By</div>
      <h2 class="lc-heading fade-up fade-up-d1" style="text-align:center;">Our Premium Clients</h2>
      <div class="lc-divider fade-up fade-up-d2" style="margin:20px auto;"></div>
      <p class="lc-sub fade-up fade-up-d3" style="text-align:center;margin:0 auto;">Spaces we have transformed for India's most discerning brands and institutions.</p>
    </div>
    <div class="lc-clients-grid">
      <?php
      $clients = getDB()->query("SELECT * FROM premium_clients WHERE status = 1 ORDER BY display_order ASC, id ASC")->fetchAll();
      if (empty($clients)) {
        $clients = [
          ['name' => 'The Oberoi', 'logo' => null],
          ['name' => 'IBIS Hotel', 'logo' => null],
          ['name' => 'Lemon Tree', 'logo' => null],
          ['name' => 'Vision Hospitality', 'logo' => null],
          ['name' => 'CPRI', 'logo' => null],
          ['name' => 'Sun Glassworks Pvt Ltd', 'logo' => null],
          ['name' => 'Honda India Powder Products Ltd', 'logo' => null],
        ];
      }
      foreach ($clients as $i => $cl): $d='fade-up-d'.(($i%4)+1);
      ?>
      <div class="lc-client-item fade-up <?php echo $d; ?>">
        <?php if (!empty($cl['logo'])): ?>
          <img class="lc-client-logo" src="<?php echo htmlspecialchars(getImageUrl($cl['logo'])); ?>" alt="<?php echo htmlspecialchars($cl['name']); ?>">
        <?php endif; ?>
        <div class="lc-client-name"><?php echo htmlspecialchars($cl['name']); ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════
     CTA
════════════════════════════════════════ -->
<section class="lc-cta">
  <div class="lc-cta-inner">
    <div class="lc-eyebrow fade-up">Begin Your Journey</div>
    <h2 class="lc-heading fade-up fade-up-d1"><?php echo htmlspecialchars($inquiry_title); ?></h2>
    <p class="fade-up fade-up-d2"><?php echo htmlspecialchars($inquiry_text); ?></p>
    <div class="lc-cta-btns fade-up fade-up-d3">
      <a href="#" class="btn-primary-lc" data-bs-toggle="modal" data-bs-target="#quoteInquiryModal">Request a Quote <i class="bi bi-arrow-right"></i></a>
      <a href="https://wa.me/<?php echo getSetting('whatsapp','917042704454'); ?>" target="_blank" class="btn-ghost-lc">
        <i class="bi bi-whatsapp"></i> WhatsApp Us
      </a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
