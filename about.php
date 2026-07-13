<?php
/**
 * LAVANYAA CREATION — Our Story
 */
require_once __DIR__ . '/config/db.php';
require_once __DIR__ . '/functions/settings.php';

$page_title  = 'Our Story — Lavanyaa Creation';
$page_desc   = 'Established in 2019, Lavanyaa Creation crafts premium furniture and bespoke interior solutions for luxury residences, corporate offices, hotels, and hospitality spaces.';
$active_page = 'about';

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>

<!-- ABOUT HERO -->
<section class="lc-about-hero">
  <div class="lc-about-hero-inner">
    <div class="lc-breadcrumb fade-up">
      <a href="<?php echo BASE_URL; ?>/index.php">Home</a>
      <span class="lc-breadcrumb-sep">/</span>
      <span style="color:rgba(255,255,255,.6);">Our Story</span>
    </div>
    <div class="lc-eyebrow fade-up fade-up-d1" style="color:var(--accent-lt);">Since 2019</div>
    <h1 class="fade-up fade-up-d2">A Passion for <em>Creating Spaces<br>People Truly Love</em></h1>
    <p class="fade-up fade-up-d3">Established with a vision to redefine modern spaces through thoughtfully crafted furniture and innovative interior solutions.</p>
  </div>
</section>

<!-- STORY NARRATIVE -->
<section class="section-pad" style="background:var(--white);">
  <div class="lc-container">
    <div class="lc-about-copy" style="max-width:780px;margin:0 auto;">

      <div class="fade-up" style="margin-bottom:48px;">
        <p style="font-family:var(--serif);font-size:1.5rem;line-height:1.6;color:var(--text);font-weight:400;font-style:italic;">
          "Our journey began with a simple belief — great spaces deserve exceptional furniture."
        </p>
      </div>

      <div class="lc-story-body fade-up fade-up-d1">
        <p>What started as a vision to bring thoughtfully designed furniture into modern spaces has gradually evolved into a brand committed to quality, craftsmanship, and timeless design. From the very beginning, our focus has been clear — to create furniture that not only enhances the beauty of a space but also adds comfort, functionality, and lasting value.</p>

        <p>Over the years, we have worked closely with clients across residential, corporate, and hospitality sectors, understanding their unique requirements and transforming ideas into reality. Every project has contributed to our growth, helping us refine our expertise in design, material selection, and execution.</p>

        <p>At Lavanyaa Creation, we believe furniture is more than just décor — it shapes the way people live, work, and connect. This belief drives us to create pieces that balance aesthetics with purpose.</p>

        <p>Our strength lies in our attention to detail, premium-quality materials, and commitment to excellence. From luxurious living spaces and elegant dining areas to sophisticated office environments and hospitality projects, every creation reflects our passion for craftsmanship.</p>

        <p>As we continue to grow, our mission remains unchanged — to deliver furniture solutions that inspire, perform, and stand the test of time.</p>
      </div>

      <div class="fade-up fade-up-d2" style="text-align:center;padding:40px 0 0;border-top:1px solid var(--border-lt);margin-top:40px;">
        <p style="font-family:var(--serif);font-size:1.3rem;color:var(--primary);font-style:italic;margin-bottom:6px;">For us, this is not just business.<br>It is a passion for creating spaces people truly love.</p>
        <p style="font-size:.75rem;letter-spacing:.18em;text-transform:uppercase;color:var(--accent);">— This is the story of Lavanyaa Creation</p>
      </div>

    </div>
  </div>
</section>

<!-- VALUES STRIP -->
<section class="section-pad" style="background:var(--bg);">
  <div class="lc-container">
    <div style="text-align:center;margin-bottom:56px;">
      <div class="lc-eyebrow fade-up" style="justify-content:center;">What Drives Us</div>
      <h2 class="lc-heading fade-up fade-up-d1" style="text-align:center;">Our Core Values</h2>
    </div>
    <div class="lc-why-grid" style="background:var(--border-lt);">
      <div class="lc-why-item fade-up fade-up-d1" style="background:var(--white);">
        <div class="lc-why-icon" style="color:var(--primary);"><i class="bi bi-award"></i></div>
        <h4 style="color:var(--text);">Uncompromising Quality</h4>
        <p style="color:var(--text-dark);">We carefully select premium-quality materials that enhance durability and elevate the final product's elegance and character.</p>
      </div>
      <div class="lc-why-item fade-up fade-up-d2" style="background:var(--white);">
        <div class="lc-why-icon" style="color:var(--primary);"><i class="bi bi-lightbulb"></i></div>
        <h4 style="color:var(--text);">Continuous Innovation</h4>
        <p style="color:var(--text-dark);">We continuously evolve with emerging design trends, developing contemporary furniture that redefines modern living and workspaces.</p>
      </div>
      <div class="lc-why-item fade-up fade-up-d3" style="background:var(--white);">
        <div class="lc-why-icon" style="color:var(--primary);"><i class="bi bi-people"></i></div>
        <h4 style="color:var(--text);">Trusted Partnership</h4>
        <p style="color:var(--text-dark);">A trusted partner for architects, designers, and clients seeking world-class furniture solutions, built on years of expertise.</p>
      </div>
    </div>
  </div>
</section>

<!-- GALLERY STRIP -->
<section class="section-pad-sm" style="background:var(--white);padding-bottom:0;">
  <div class="lc-container">
    <div style="display:grid;grid-template-columns:1.3fr 1fr 1fr;gap:16px;">
      <img src="https://images.unsplash.com/photo-1616046229478-9901c5536a45?q=80&w=580&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Premium Living Space" loading="lazy" class="fade-up" style="width:100%;height:420px;object-fit:cover;border-radius:8px;filter:saturate(.8);">
      <img src="https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?w=700&q=85" alt="Elegant Dining" loading="lazy" class="fade-up fade-up-d1" style="width:100%;height:420px;object-fit:cover;border-radius:8px;filter:saturate(.8);">
      <img src="https://images.unsplash.com/photo-1631889993959-41b4e9c6e3c5?w=700&q=85" alt="Office Interior" loading="lazy" class="fade-up fade-up-d2" style="width:100%;height:420px;object-fit:cover;border-radius:8px;filter:saturate(.8);">
    </div>
  </div>
</section>

<!-- CTA -->
<section class="lc-cta">
  <div class="lc-cta-inner">
    <div class="lc-eyebrow fade-up">Work With Us</div>
    <h2 class="lc-heading fade-up fade-up-d1">Let's Create Something Extraordinary</h2>
    <p class="fade-up fade-up-d2">Whether it's a single statement piece or a complete commercial fit-out, our team is ready to bring your vision to life.</p>
    <div class="lc-cta-btns fade-up fade-up-d3">
      <a href="<?php echo BASE_URL; ?>/contact.php" class="btn-primary-lc">Contact Us <i class="bi bi-arrow-right"></i></a>
      <a href="<?php echo BASE_URL; ?>/category.php?cat=all" class="btn-ghost-lc">View Collections</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
