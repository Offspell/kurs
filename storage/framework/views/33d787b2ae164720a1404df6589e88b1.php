<?php $__env->startSection('content'); ?>
    <div class="container mx-auto ">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-8 order-md-2 col-lg-9">
                    <div class="container-fluid">
                        <div class="row   mb-5">
                            <div class="col-12">
                                <div class="dropdown text-md-left text-center float-md-left mb-3 mt-3 mt-md-0 mb-md-0">
                                    <label class="mr-2">Sort by:</label>
                                    <a class="btn btn-lg btn-light dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Relevance <span
                                            class="caret"></span></a>
                                </div>
                                <div class="btn-group float-md-right ml-3">
                                    <button type="button" class="btn btn-lg btn-light"> <span
                                            class="fa fa-arrow-left"></span> </button>
                                    <button type="button" class="btn btn-lg btn-light"> <span
                                            class="fa fa-arrow-right"></span> </button>
                                </div>
                                <div class="dropdown float-right">
                                    <label class="mr-2">View:</label>
                                    <a class="btn btn-lg btn-light dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">9 <span class="caret"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-6 col-md-6 col-lg-4 mb-3">
                                    <div class="card h-100 border-0">
                                        <div class="flex justify-center">
                                            <?php if(!is_null($product->image_path)): ?>
                                                <img class="w-24 " src="<?php echo e(asset('storage/' . $product->image_path)); ?>"
                                                    class="mx-auto " alt="Zdjęcie produktu">
                                            <?php else: ?>
                                                <img class="w-24"src="https://via.placeholder.com/240x240/5fa9f8/efefef"
                                                    class="img-fluid mx-auto d-block" alt="Zdjęcie produktu">
                                            <?php endif; ?>
                                        </div>
                                        <div class="card-body text-center">
                                            <h4 class="card-title">
                                                
                                                <?php echo e($product->name); ?>

                                                
                                            </h4>
                                            <h5 class="card-price small text-warning">
                                                <i><?php echo e($product->price); ?></i>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <form class="col-md-4 order-md-1 col-lg-3 sidebar-filter">
                        <h3 class="mt-0 mb-5">Produkty <span class="text-primary"><?php echo e(count($products)); ?></span></h3>
                        <h6 class="text-uppercase font-weight-bold mb-3">Kategorie</h6>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="mt-2 mb-2 pl-2">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name= "filter[categories][]"
                                        id="category-<?php echo e($category->id); ?>" value="<?php echo e($category->id); ?>">
                                    <label class="custom-control-label"
                                        for="category-<?php echo e($category->id); ?>"><?php echo e($category->name); ?></label>
                                </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
                        <h6 class="text-uppercase mt-5 mb-3 font-weight-bold">Price</h6>
                        <div class="price-filter-control">
                            <input type="number" class="form-control w-50 pull-left mb-2" placeholder="50"
                                name="filter[price_min]" id="price-min-control">
                            <input type="number" class="form-control w-50 pull-right" name="filter[price_max]"
                                placeholder="150" id="price-max-control">
                        </div>
                        <input id="ex2" type="text" class="slider " value="50,150" data-slider-min="10"
                            data-slider-max="200" data-slider-step="5" data-slider-value="[50,150]" data-value="50,150"
                            style="display: none;">
                        <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
                        <a href="#" class="btn btn-lg btn-block btn-primary mt-5" id="filter-button">Filtruj</a>
                    </form>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('js.files'); ?>
    <script src="<?php echo e(asset('js/welcome.js')); ?>" <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/kurs/resources/views/welcome.blade.php ENDPATH**/ ?>