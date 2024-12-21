<?php get_header(); ?>
<main>
        <section class="content">
            <div class="grid">

                <div class="item">
                    <img src="http://site/wp-content/uploads/2024/12/123333.jpg">
                    <h3>Фрукты <i class="fas fa-apple-alt"></i></h3>
                    <p>Ешьте свежие фрукты для укрепления здоровья!</p>
                </div>
                <div class="item">
                    <img src="http://site/wp-content/uploads/2024/12/a1.jpg" alt="Спорт">
                    <h3>Активный спорт <i class="fas fa-running"></i></h3>
                    <p>Регулярная физическая активность — ключ к долголетию.</p>
                </div>
                
                <div class="item">
                    <img src="http://site/wp-content/uploads/2024/12/2.jpg" alt="Прогулки">
                    <h3>Прогулки <i class="fas fa-walking"></i></h3>
                    <p>Старайтесь больше гулять на свежем воздухе.</p>
                </div>
                <div class="item">
                    <img src="http://site/wp-content/uploads/2024/12/22.jpg" alt="Питание">
                    <h3>Правильное питание <i class="fas fa-utensils"></i></h3>
                    <p>Сбалансированное питание — основа здоровья.</p>
                </div>
                
            </div>
            <div class="grid2">
                
                <div class="item">
                     <h3>Пейте воду! <i class="fas fa-tint"></i></h3>
                    <img src="http://site/wp-content/uploads/2024/12/122.jpg" alt="Вода">
                </div>
                <div class="item">
                     <h3>Йога и медитация <i class="fas fa-spa"></i></h3>
                    <img src="http://site/wp-content/uploads/2024/12/1223.jpg" alt="Йога">
                </div>
                <div class="search">
                    <input type="text" placeholder="Поиск...">
                    <button><i class="fas fa-search"></i> Найти</button>
                </div>
            </div>
        </section>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <p class="qazx"><?php the_title(); ?></p>
     <?php endwhile; else: ?>
        <p class="qazx"> Записей нет.</p>
      <?php endif; ?>

    </main>
    <?php get_footer(); ?>