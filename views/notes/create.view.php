<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>
<?php require('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div>
            <div class="md:grid md:grid-cols3 md:gap-6">
                <div class="mt-5 md:col-span-2 md:mt-0">
                    <form method="POST">
                        <div class="shadow sm:overflow-hidden" sm:rounded-md>
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            <div>
                            <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
                            <div class="mt-1">
                                <textarea id="body" name="body" rows="3"
                                          class="mt-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 
                                           ring-inset ring-gray-300
                                           focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                           placeholder="Here's and idea for a note..."><?=$_POST['body'] ?? '' ?></textarea>
                                <?php if(isset($errors['body'])) : ?>
                                    <p class="text-red-500 text-xs mt-2"><?= $errors['body'] ?></p>
                                    <?php endif; ?>
                            </div>
                        </div>
                        </div>
                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="submit"
                                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Save
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</main>

<?php require('views/partials/footer.php') ?>
