<?php get_header(); ?>

<main class="bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="bg-white rounded-2xl overflow-hidden shadow-lg">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="relative h-64">
                            <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="p-8">
                        <div class="flex items-center mb-4">
                            <?php
                            $categories = get_the_category();
                            if (!empty($categories)) :
                            ?>
                                <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-medium mr-2">
                                    <?php echo esc_html($categories[0]->name); ?>
                                </span>
                            <?php endif; ?>
                            <span class="text-gray-500 text-sm"><?php echo get_the_date(); ?></span>
                        </div>
                        
                        <h1 class="text-3xl font-bold text-gray-900 mb-4"><?php the_title(); ?></h1>
                        
                        <div class="prose max-w-none">
                            <h2 class="text-xl font-bold text-gray-900 mb-3">Manage Your Connection Easily & Smartly</h2>
                            <p class="text-gray-600 mb-6">At Medycyna Pracy Express, our goal is simple: to provide comprehensive medical examination services for everyone. In an era where workplace health and safety are more important than ever, we believe every employee has the right to quality medical care and preventive health services.</p>
                            
                            <div class="bg-blue-600 text-white p-6 rounded-xl my-8">
                                <blockquote class="text-lg font-medium">
                                    "Our Team Of Medical Professionals Is Passionate About Providing The Highest Quality Occupational Health Services. Let Us Be Your Partners In Health – Where Prevention Meets Excellence."
                                </blockquote>
                            </div>
                            
                            <p class="text-gray-600">With our state-of-the-art facilities, experienced medical staff, and comprehensive examination protocols, Medycyna Pracy Express provides cutting-edge medical services with ease of access. We believe every employee deserves quality healthcare and preventive services.</p>
                        </div>
                    </div>
                </article>
                <?php endwhile; endif; ?>
            </div>
            
            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Search -->
                <div class="bg-blue-50 rounded-2xl p-6">
                    <div class="relative">
                        <input type="text" placeholder="Search here..." class="w-full p-3 pr-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        <svg class="w-5 h-5 text-gray-400 absolute right-3 top-3" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"/>
                        </svg>
                    </div>
                </div>
                
                <!-- Popular Posts -->
                <div class="bg-white rounded-2xl p-6 shadow-lg">
                    <h3 class="font-bold text-gray-900 mb-4">Popular Post</h3>
                    <div class="space-y-4">
                        <div class="flex gap-3">
                            <div class="w-15 h-15 bg-gray-200 rounded-lg shrink-0"></div>
                            <div>
                                <h4 class="font-medium text-gray-900 text-sm mb-1 leading-tight">The Role of AI in Modern Laboratory Research.</h4>
                                <p class="text-xs text-gray-500">November 28, 2024</p>
                            </div>
                        </div>
                        <div class="flex gap-3">
                            <div class="w-15 h-15 bg-gray-200 rounded-lg shrink-0"></div>
                            <div>
                                <h4 class="font-medium text-gray-900 text-sm mb-1 leading-tight">Top 10 Laboratory Safety Practices You Should Know.</h4>
                                <p class="text-xs text-gray-500">November 25, 2024</p>
                            </div>
                        </div>
                        <div class="flex gap-3">
                            <div class="w-15 h-15 bg-gray-200 rounded-lg shrink-0"></div>
                            <div>
                                <h4 class="font-medium text-gray-900 text-sm mb-1 leading-tight">Understanding the Science Behind Sample Analysis.</h4>
                                <p class="text-xs text-gray-500">November 22, 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Categories -->
                <div class="bg-white rounded-2xl p-6 shadow-lg">
                    <h3 class="font-bold text-gray-900 mb-4">Categories</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center py-1">
                            <span class="text-gray-600 hover:text-blue-600 cursor-pointer">Research Insights</span>
                            <span class="text-gray-400 text-sm">(12)</span>
                        </div>
                        <div class="flex justify-between items-center py-1">
                            <span class="text-gray-600 hover:text-blue-600 cursor-pointer">Laboratory Best Practices</span>
                            <span class="text-gray-400 text-sm">(08)</span>
                        </div>
                        <div class="flex justify-between items-center py-1">
                            <span class="text-gray-600 hover:text-blue-600 cursor-pointer">Innovation & Technology</span>
                            <span class="text-gray-400 text-sm">(15)</span>
                        </div>
                        <div class="flex justify-between items-center py-1">
                            <span class="text-gray-600 hover:text-blue-600 cursor-pointer">Industry Trends</span>
                            <span class="text-gray-400 text-sm">(06)</span>
                        </div>
                        <div class="flex justify-between items-center py-1">
                            <span class="text-gray-600 hover:text-blue-600 cursor-pointer">Sustainability in Science</span>
                            <span class="text-gray-400 text-sm">(09)</span>
                        </div>
                        <div class="flex justify-between items-center py-1">
                            <span class="text-gray-600 hover:text-blue-600 cursor-pointer">Events & Workshops</span>
                            <span class="text-gray-400 text-sm">(11)</span>
                        </div>
                        <div class="flex justify-between items-center py-1">
                            <span class="text-gray-600 hover:text-blue-600 cursor-pointer">Educational Resources</span>
                            <span class="text-gray-400 text-sm">(04)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
