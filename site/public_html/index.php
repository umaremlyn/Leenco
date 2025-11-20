<?php include 'header.php'; ?>

<!-- Hero -->
<section class="relative bg-[url('/assets/img/hero.jpg')] bg-cover bg-center py-24">
  <div class="absolute inset-0 bg-gradient-to-r from-royal-blue/60 to-transparent"></div>
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-white">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
      <div class="py-10">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold leading-tight">Building Digital Solutions for Africa’s Future</h1>
        <p class="mt-6 max-w-xl text-sm sm:text-base text-white/90">We create software, SaaS platforms, and technology tools that empower businesses across Africa.</p>
        <div class="mt-8 flex gap-3">
          <a href="solutions.php" class="px-5 py-3 rounded-md bg-white text-royal-blue font-semibold shadow">Explore Our Solutions</a>
          <a href="contact.php" class="px-5 py-3 rounded-md bg-transparent border border-white text-white font-semibold hover:bg-white/10">Contact Us</a>
        </div>
      </div>

      <?php $product_img = file_exists(__DIR__ . '/assets/img/product.jpg') ? 'assets/img/product.jpg' : 'assets/img/product-mock.svg'; ?>
      <div class="hidden md:block">
        <!-- Illustration or product mock (local) -->
        <div class="bg-white/10 rounded-xl p-6 shadow-xl">
          <img src="<?php echo $product_img;?>" alt="tech" class="rounded-lg shadow-lg" />
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About short -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
    <div class="md:col-span-2">
      <h2 class="text-2xl font-bold text-royal-blue">About Leen-Co Tech</h2>
      <p class="mt-4 text-gray-600">Leen-Co Tech builds modern digital products and services tailored for African markets — from cloud POS to AI tooling — helping organizations innovate, scale, and delight customers.</p>
    </div>

    <div class="bg-light-blue p-6 rounded-lg shadow-sm">
      <h3 class="text-lg font-semibold">Why Choose Us</h3>
      <ul class="mt-4 text-gray-700 space-y-2 text-sm">
        <li><strong>Trust:</strong> Reliable, secure products.</li>
        <li><strong>Innovation:</strong> Local-first design & AI solutions.</li>
        <li><strong>Support:</strong> Friendly 24/7 support and training.</li>
      </ul>
    </div>
  </div>
</section>

<!-- Our Solutions -->
<section class="bg-gray-50 py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-2xl font-bold text-royal-blue mb-6">Our Solutions</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

      <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg">
        <div class="flex items-center gap-4">
          <div class="w-12 h-12 rounded-md bg-royal-blue text-white flex items-center justify-center font-bold">LT</div>
          <div>
            <h3 class="font-semibold">LeenTrack</h3>
            <p class="text-sm text-gray-600">Cloud POS, Retail & Inventory Management</p>
          </div>
        </div>
        <ul class="mt-4 text-sm text-gray-600 space-y-1">
          <li>Inventory control</li>
          <li>Sales analytics</li>
          <li>Offline-first support</li>
        </ul>
        <div class="mt-4">
          <a href="solutions.php#leentrack" class="text-sm text-royal-blue font-semibold">Learn More →</a>
        </div>
      </div>

      <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg">
        <div class="flex items-center gap-4">
          <div class="w-12 h-12 rounded-md bg-royal-blue text-white flex items-center justify-center font-bold">XA</div>
          <div>
            <h3 class="font-semibold">Xamani-AI</h3>
            <p class="text-sm text-gray-600">African Local Languages Prompt Generator</p>
          </div>
        </div>
        <ul class="mt-4 text-sm text-gray-600 space-y-1">
          <li>Multilingual prompts</li>
          <li>Custom templates</li>
          <li>API integrations</li>
        </ul>
        <div class="mt-4">
          <a href="solutions.php#xamani" class="text-sm text-royal-blue font-semibold">Learn More →</a>
        </div>
      </div>

      <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg">
        <div class="flex items-center gap-4">
          <div class="w-12 h-12 rounded-md bg-royal-blue text-white flex items-center justify-center font-bold">AS</div>
          <div>
            <h3 class="font-semibold">AdStream-AI</h3>
            <p class="text-sm text-gray-600">AI-powered Marketing Automation</p>
          </div>
        </div>
        <ul class="mt-4 text-sm text-gray-600 space-y-1">
          <li>Campaign automation</li>
          <li>Smart segmentation</li>
          <li>Performance insights</li>
        </ul>
        <div class="mt-4">
          <a href="solutions.php#adstream" class="text-sm text-royal-blue font-semibold">Learn More →</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
  <h2 class="text-2xl font-bold text-royal-blue mb-6">Testimonials</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="p-6 bg-white rounded-lg shadow">
      <p class="text-gray-600">"LeenTrack transformed our retail ops — fast and friendly support."</p>
      <div class="mt-4 text-sm font-semibold">— Amina, Retail Owner</div>
    </div>
    <div class="p-6 bg-white rounded-lg shadow">
      <p class="text-gray-600">"Xamani-AI helped us localize content for multiple markets."</p>
      <div class="mt-4 text-sm font-semibold">— Chinedu, Marketing Lead</div>
    </div>
    <div class="p-6 bg-white rounded-lg shadow">
      <p class="text-gray-600">"AdStream-AI improved our ad ROI by 38% in three months."</p>
      <div class="mt-4 text-sm font-semibold">— Fatima, Growth Manager</div>
    </div>
  </div>
</section>

<!-- Clients & Partners -->
<section class="bg-gradient-to-r from-royal-blue/5 to-light-blue/20 py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-10">
      <h2 class="text-3xl font-bold text-royal-blue">Trusted by African Businesses</h2>
      <p class="mt-3 text-gray-600">We partner with innovative companies across Africa</p>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4 md:gap-6 items-center justify-center">
      <!-- Leen-Co Tech Logo (Highlighted) -->
      <div class="flex items-center justify-center h-24 bg-royal-blue/10 rounded-lg shadow-sm border-2 border-royal-blue hover:shadow-md transition col-span-2 sm:col-span-1">
        <img src="assets/img/clients/leenco%20logo.png" alt="Leen-Co Tech" class="max-w-full max-h-full p-3" />
      </div>
      <div class="flex items-center justify-center h-24 bg-white rounded-lg shadow-sm hover:shadow-md transition">
        <img src="assets/img/clients/tradelixafrica.jpeg" alt="TradeLix Africa" class="max-w-full max-h-full p-3" />
      </div>
      <div class="flex items-center justify-center h-24 bg-white rounded-lg shadow-sm hover:shadow-md transition">
        <img src="assets/img/clients/Habeebaty.svg" alt="Habibaty Hair Foods" class="max-w-full max-h-full p-3" />
      </div>
      <div class="flex items-center justify-center h-24 bg-white rounded-lg shadow-sm hover:shadow-md transition">
        <img src="assets/img/clients/sendex-courier-services.svg" alt="SendEx Courier Services" class="max-w-full max-h-full p-3" />
      </div>
      <div class="flex items-center justify-center h-24 bg-white rounded-lg shadow-sm hover:shadow-md transition">
        <img src="assets/img/clients/HSquare Logo.PNG" alt="H-Square Global Ltd" class="max-w-full max-h-full p-3" />
      </div>
      <div class="flex items-center justify-center h-24 bg-white rounded-lg shadow-sm hover:shadow-md transition">
        <img src="assets/img/clients/windex.jpg" alt="WindEx Logistics" class="max-w-full max-h-full p-3" />
      </div>
      <div class="flex items-center justify-center h-24 bg-white rounded-lg shadow-sm hover:shadow-md transition">
        <img src="assets/img/clients/MD-Dubai.jpg" alt="MD-Dubai Global CarGo Ltd" class="max-w-full max-h-full p-3" />
      </div>
      <div class="flex items-center justify-center h-24 bg-white rounded-lg shadow-sm hover:shadow-md transition">
        <img src="assets/img/clients/ESAHUB Logo.jpg" alt="ESAHub Africa" class="max-w-full max-h-full p-3" />
      </div>
      <div class="flex items-center justify-center h-24 bg-white rounded-lg shadow-sm hover:shadow-md transition">
        <img src="assets/img/clients/leepha-quality.png" alt="Leepha Quality" class="max-w-full max-h-full p-3" />
      </div>
      <div class="flex items-center justify-center h-24 bg-white rounded-lg shadow-sm hover:shadow-md transition">
        <img src="assets/img/clients/highend-logo.jpg" alt="HighEnd Clothing" class="max-w-full max-h-full p-3" />
      </div>
      <div class="flex items-center justify-center h-24 bg-white rounded-lg shadow-sm hover:shadow-md transition">
        <img src="assets/img/clients/pibit-ventures.svg" alt="Pibit Ventures" class="max-w-full max-h-full p-3" />
      </div>
    </div>

    <!-- Partners Section -->
    <div class="mt-12">
      <h3 class="text-center text-2xl font-bold text-royal-blue mb-6">Our Trusted Partners</h3>
      <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 md:gap-6 max-w-2xl mx-auto">
        <div class="flex items-center justify-center h-24 bg-white rounded-lg shadow-sm hover:shadow-md transition">
          <img src="assets/img/mufix logo.PNG" alt="Mufix Global Ltd" class="max-w-full max-h-full p-3" />
        </div>
        <div class="flex items-center justify-center h-24 bg-white rounded-lg shadow-sm hover:shadow-md transition">
          <img src="assets/img/clients/sz-digital-solutions.svg" alt="SZ DIGITAL SOLUTIONS" class="max-w-full max-h-full p-3" />
        </div>
        <div class="flex items-center justify-center h-24 bg-white rounded-lg shadow-sm hover:shadow-md transition">
          <img src="assets/img/nextflow logo.jpeg" alt="NextFlow Innovation" class="max-w-full max-h-full p-3" />
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
