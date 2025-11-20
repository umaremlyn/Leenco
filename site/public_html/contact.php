<?php include 'header.php'; ?>

<section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
  <h1 class="text-2xl font-bold text-royal-blue">Contact Us</h1>
  <p class="mt-2 text-gray-600">We’d love to hear from you. Reach out for partnerships, demos, or support.</p>

  <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
    <div class="bg-white rounded-lg p-6 shadow">
      <form action="send-mail.php" method="post" class="space-y-4">
        <div>
          <label class="block text-sm font-medium text-gray-700">Full Name</label>
          <input required type="text" name="name" class="mt-1 block w-full rounded-md border-gray-200 shadow-sm px-3 py-2" />
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Email</label>
          <input required type="email" name="email" class="mt-1 block w-full rounded-md border-gray-200 shadow-sm px-3 py-2" />
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Message</label>
          <textarea required name="message" rows="5" class="mt-1 block w-full rounded-md border-gray-200 shadow-sm px-3 py-2"></textarea>
        </div>
        <div>
          <button type="submit" class="px-4 py-2 rounded-md bg-royal-blue text-white font-semibold">Send Message</button>
        </div>
      </form>
    </div>

    <div class="space-y-6">
      <div class="bg-light-blue p-6 rounded-lg shadow">
        <h3 class="font-semibold">Contact Emails</h3>
        <p class="mt-2 text-sm text-gray-700">leencotech@gmail.com<br/>contact@leenco.tech</p>
      </div>

      <div class="bg-white rounded-lg overflow-hidden shadow">
        <iframe class="w-full h-64 border-0" src="https://www.google.com/maps?q=Kano+Nigeria&output=embed"></iframe>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
