<?php
// footer.php - site-wide footer and scripts
?>

</main>

<footer class="bg-gray-50 border-t mt-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div>
        <h3 class="text-lg font-semibold text-royal-blue">Leen-Co Tech Ltd</h3>
        <p class="mt-3 text-sm text-gray-600">Building digital solutions for Africa's future. Software, SaaS and technology tools to empower businesses across the continent.</p>
        <div class="mt-4 flex gap-3">
          <a href="https://linkedin.com/company/leenco-tech" target="_blank" class="text-royal-blue hover:text-royal-blue/80" title="LinkedIn">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.225 0z"/></svg>
          </a>
          <a href="https://twitter.com/leencotech" target="_blank" class="text-royal-blue hover:text-royal-blue/80" title="Twitter">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2s9 5 20 5a9.5 9.5 0 00-9-5.5c4.75 2.25 10.5.5 13-4.5a17.5 17.5 0 01-8 2.25z"/></svg>
          </a>
          <a href="https://www.instagram.com/leencotech" target="_blank" class="text-royal-blue hover:text-royal-blue/80" title="Instagram">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm0 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2zm3.5 11a3.5 3.5 0 11-7 0 3.5 3.5 0 017 0zm-1-5a1 1 0 11-2 0 1 1 0 012 0z"/></svg>
          </a>
          <a href="mailto:info@leenco.tech" class="text-royal-blue hover:text-royal-blue/80" title="Email">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
          </a>
        </div>
      </div>

      <div>
        <h4 class="text-sm font-semibold text-gray-700">Contact</h4>
        <ul class="mt-3 text-sm text-gray-600 space-y-1">
          <li>leencotech@gmail.com</li>
          <li>contact@leenco.tech</li>
          <li>Head Office: No. 8 Baba Plaza Audu Bako Way, Nasarawa GRA, Kano.</li>
        </ul>
      </div>

      <div>
        <h4 class="text-sm font-semibold text-gray-700">Company</h4>
        <ul class="mt-3 text-sm text-gray-600 space-y-1">
          <li>RC Number: 1945125</li>
          <li>Registered Address: No. 28A Gadangami Complex Kabuga, Gwarzo Road.</li>
        </ul>
      </div>
    </div>

    <div class="mt-8 border-t pt-6 text-sm text-gray-500 flex items-center justify-between">
      <div>© <?php echo date('Y'); ?> Leen-Co Tech Ltd. All rights reserved.</div>
      <div class="text-right">Designed with <span style="color:#D4AF37; display:inline-flex; align-items:center; gap:0.5rem">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
          <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
        </svg>
      </span> for Africa</div>
  </div>
</footer>

<!-- Scroll to top button -->
<button id="scrollTop" class="hidden fixed bottom-24 right-6 p-3 rounded-full bg-royal-blue text-white shadow-lg z-40" title="Back to top">
  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
  </svg>
</button>

<!-- Floating WhatsApp Button -->
<a href="https://wa.me/c/2348175485013?text=Hello%20Leen-Co%20Tech%2C%20I%27m%20interested%20in%20your%20products%20and%20services" target="_blank" class="fixed bottom-6 right-6 p-4 rounded-full bg-green-500 text-white shadow-lg z-40 hover:bg-green-600 transition-all duration-300 flex items-center justify-center group" title="Chat on WhatsApp">
  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.67-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.076 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421-7.403h-.004a9.87 9.87 0 00-4.968 1.495c-1.533.867-2.852 2.051-3.8 3.468C.929 10.487.36 12.34.36 14.292c0 5.164 4.213 9.426 9.407 9.426 2.034 0 3.954-.608 5.57-1.756l.26 1.055c.219.893.827 1.59 1.577 1.591h.003c.953 0 1.724-.778 1.724-1.739 0-.611-.31-1.147-.776-1.455l-.197-3.368c.447-1.144.779-2.355.971-3.606.051-.385.051-.77.051-1.155 0-4.844-3.933-8.777-8.777-8.777z"/>
  </svg>
  <span class="absolute right-16 bg-green-500 text-white px-3 py-2 rounded-lg text-sm font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Reach Out to us on WhatsApp</span>
</a>

<!-- Scripts -->
<script src="assets/js/main.js"></script>
</body>
</html>
