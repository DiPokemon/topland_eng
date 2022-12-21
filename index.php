<?php get_header(); ?>
            <section class="page__main-block main">
              <div class="main-background1-img"></div>
              <div class="main-background2-img"></div>
              <div class="main-background3-img"></div>                        
                <div class="main-block__container _container">
                      <div class="main-block__body">
                          <div class="main-content">
                            <div class="main-content_wrapper">
                              <h1 class="main-title">Complex SEO promotion of sites</h1>    
                              <div class="main_subtext">Effective solutions for your business</div>
                              <div class="main-subtitle">
                                <div class="main-subtitle__item"><span><img loading="lazy" src="<?php echo get_template_directory_uri()?>/static/img/Soft Star.svg" alt="img"></span>SEO promotion</div>                              
                                <div class="main-subtitle__item"><span><img loading="lazy" src="<?php echo get_template_directory_uri()?>/static/img/Soft Star.svg" alt="img"></span>Website development</div>                              
                                <div class="main-subtitle__item"><span><img loading="lazy" src="<?php echo get_template_directory_uri()?>/static/img/Soft Star.svg" alt="img"></span>Business Solutions</div>
                              </div>
                              <a href="https://wa.me/79514976107" class="btn main-button_href">Ask a question on What'sApp</a>                              
                            </div>
                          </div>
                          <div class="main-image">
                            <div class="main-image_grid">
                              <div class="main-image__el">
                                <div class="main-image__text_title">There is a solution for every problem!</div>
                              </div>                            
                              <div class="main-image__el">
                                <img loading="lazy" src="<?php echo get_template_directory_uri()?>/static/img/img2.png" alt="img">
                              </div>
                              <div class="main-image__el">
                                <img loading="lazy" src="<?php echo get_template_directory_uri()?>/static/img/img3.png" alt="img">
                              </div>
                              <div class="main-image__el">
                                <img loading="lazy" src="<?php echo get_template_directory_uri()?>/static/img/img4.png" alt="img">
                              </div>
                            </div>  
                          </div>
                      </div>
                </div>
                <div class="main-background">
                  <div class="_container">
                    <div class="main-3columns">
                      <div class="main-3columns__item">
                          <div class="main-3columns__item_img"><img loading="lazy" src="<?php echo get_template_directory_uri()?>/static/img/Frame 1.svg" alt="Повышение продаж"></div>
                          <div class="main-3colums__item_text">SEO promotion both in Rostov-on-Don and throughout Russia</div>
                      </div>
                      <div class="main-3columns__item">
                          <div class="main-3columns__item_img"><img loading="lazy" src="<?php echo get_template_directory_uri()?>/static/img/Lightning 2.svg" alt="Веб студия в Ростове-на-Дону"></div>
                          <div class="main-3colums__item_text">7 years of experience in online marketing</div>
                      </div>
                      <div class="main-3columns__item">
                          <div class="main-3columns__item_img"><img src="<?php echo get_template_directory_uri()?>/static/img/Stairs 1.svg" alt="SEO Продвижение сайтов"></div>
                          <div class="main-3colums__item_text">We promote websites with technically complex topics</div>
                      </div>                  
                    </div>
                    <div class="main-3columns_mobile slider_wrapper">
                      <div class="main-slider">
                        <div class="main-3columns__item">
                            <div class="main-3columns__item_img"><img loading="lazy" src="<?php echo get_template_directory_uri()?>/static/img/Frame 1.svg" alt="Повышение продаж"></div>
                            <div class="main-3colums__item_text">SEO promotion both in Rostov-on-Don and throughout Russia</div>
                        </div>
                        <div class="main-3columns__item">
                            <div class="main-3columns__item_img"><img loading="lazy" src="<?php echo get_template_directory_uri()?>/static/img/Lightning 2.svg" alt="Веб студия в Ростове-на-Дону"></div>
                            <div class="main-3colums__item_text">7 years of experience in online marketing</div>
                        </div>
                        <div class="main-3columns__item">
                            <div class="main-3columns__item_img"><img loading="lazy" src="<?php echo get_template_directory_uri()?>/static/img/Stairs 1.svg" alt="SEO Продвижение сайтов"></div>
                            <div class="main-3colums__item_text">We promote websites with technically complex topics</div>
                        </div>  
                      </div>
                    </div>
                  </div>
                </div>  
                
            </section>                                

            <section class="page__services-block services">
              <div class="services-block__container _container">
                <div class="services-block__body">
                  <h2 class="_h2 services-block__title_h2 section_title">Our services</h2>
                  <div class="services-block__columns">
                    <?php
                      $args = array(              
                          'taxonomy'      => 'category',            
                          'orderby'       => 'name',
                          'order'         => 'ASC',
                          'hide_empty'    => true,
                          'parent'        => '59',                        
                          'update_term_meta_cache' => true,
                        );
                      $term_query = new WP_Term_Query( $args );
                        foreach( $term_query->get_terms() as $term ){                            
                          ?>                           
                          <a class="services-block__item" href="/services/<?php echo $term->slug?>">
                            <div class="services-block__text"><?php echo $term->name?></div>
                            <div class="services-block__img"><img loading="lazy" src="<?php echo get_template_directory_uri()?>/static/img/Frame 1.svg" alt="<?php echo $term->name?>"></div>
                          </a>
                          <?php                          
                        }
                    ?> 
                  </div>   
                </div> 
              </div>
            </section> 
            
            <section class="page__choice-block choice"> 
              <div class="background-choice-img"></div>
              <div class="choice-block__container _container">
                <div class="choice-block__body">                
                  <div class="choice-block__text">                  
                    <div class="choice-block__title"><h2 class="_h2 choice-block__title_h2 section_title">Why choose our company</h2></div>   
                    <div class="choice-block__title"><h2 class="_h2 choice-block__title_h2-mobile section_title ">Why choose our company</h2></div>                 
                    <div class="choice-block__subtitle">The mission of our agency is to rapidly promote your business uphill, take new heights together with you and find effective solutions.</div>
                    <div class="choice-block__subtitle">Our philosophy is to become a reliable partner for you and your company in the field of Internet marketing</div>
                    <div class="choice-block__subtitle"><strong>Our values</strong></div>
                    <ul class="choice-block__list">
                      <li class="choice-block__el">maintaining long-term partnerships</li>
                      <li class="choice-block__el">integrated approach to the project</li>
                      <li class="choice-block__el">transparency of the work process</li>
                      <li class="choice-block__el">help in defining tasks</li>  
                      <li class="choice-block__el">guarantee of the safety of the methods used</li>  
                    </ul>
                    <div class="choice-block__button"><a class="choice-block__href" href="/about">About company</a></div>
                  </div>
                  <div class="choice-block__img">
                    <img loading="lazy" src="<?php echo get_template_directory_uri()?>/static/img/unsplash_DUmFLtMeAbQ.jpg" alt="Разработка и СЕО продвижение сайтов в Ростове-на-Дону">
                  </div>
                </div>
              </div>
            </section>    

            <section class="page__cases-block cases">
              <div class="cases-block__container _container">
                <div class="cases-block__body">
                  <div class="cases-block__title">
                    <h2 class="_h2 cases-block__title_h2 section_title">SEO cases</h2>
                  </div>
                  <div class="slider_wrapper">
                      <div class="cases_slider">
                        <?php $length_cases = 0 ?>
                        <?php                            
                            $args_for_cases = [
                                'posts_per_page' => 9,
                                'category_name'  => 'cases',
                                'offset'         => 0,
                            ];
                            $query_cases = new WP_Query( $args_for_cases );
                            while ($query_cases->have_posts()) :
                                $query_cases->the_post();
                                $length_cases++;
                                if (is_null(get_the_post_thumbnail_url()) || empty(get_the_post_thumbnail_url()))
                                    $post_thumbnail_url = get_template_directory_uri().'/static/empty-banner.gif';
                                else
                                    $post_thumbnail_url = get_the_post_thumbnail_url();
                                $image_id = get_post_thumbnail_id();
                                $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                                $image_title = get_the_title($image_id);
                        ?>
                            <a class="cases-block__slide case_slide" href="<?php the_permalink() ?>">
                                <div class="case_slide_wrapper">
                                  <img loading="lazy" src="<?= $post_thumbnail_url ?>" alt="<?php echo $image_alt ?>" title="<?php echo $image_title ?>">
                                  <div class="case_slide_title_wrapper">
                                    <h3 class="case_slide__title"><?php the_title() ?></h3>
                                  </div>                                
                                </div>                              
                            </a>
                        <?php endwhile; wp_reset_query(); ?>  
                      </div>
                      <div class="slider-controls">
                        <button type="button" class="slide-m-prev"></button>
                        <div class="slide-m-dots"></div>
                        <button type="button" class="slide-m-next"></button>
                      </div>
                  </div>
                </div>
              </div>
            </section>
            
            <section class="achievements_section">
              <div class="_container">
                <div class="cases-block__title">
                  <h2 class="_h2 achievements-block__title_h2 section_title">Our achievements</h2>
                </div>

                <div class="achievements_wrapper">
                  <div class="achievements_left">
                    <ul>
                      <li>With the help of SEO, we bring sites up to 70-90% of the collected commercial key queries in the TOP-10</li>
                      <li>Making sense of marketing strategies</li>
                      <li>We increase sales from our clients' websites by 3 times</li>
                    </ul>
                  </div>
                  <div class="achievements_right">
                    <ul>
                      <li>We constantly control the quality and timing of work performed</li>
                      <li>We increase trust in your brand</li>
                      <li>We improve the technical and informational state of the site</li>
                      <li>We work with technically complex topics</li>
                    </ul>
                  </div>
                </div>
                
              </div>
            </section>

            <section class="page__reviews-block reviews">
              <div class="reviews_gradient_bg-img"></div>
              <div class="reviews-block__container _container">                
                <div class="reviews-block__body">                
                <div class="triple_stars revies_triple_stars"><img loading="lazy" class="triple-stars" src="<?php echo get_template_directory_uri()?>/static/img/triple_stars.svg" alt="img"></div>
                  <div class="reviews-block__title">
                    <h2 class="_h2 reviews-block__title_h2 section_title">Customer Reviews</h2>
                  </div>
                  <div class="main_block__wrapper">
                    <div class="slider_wrapper">
                      <div class="reviews_slider">

                        <?php echo do_shortcode('[topland_reviews]'); ?>

                        <!-- <div itemscope itemtype="https://schema.org/Review" class="reviews-block__slide reviews-slide">
                          <meta itemprop="datePublished" content="2022-07-15"/>
                          <meta itemprop="name" content="Шарыпкин Вячеслав о TopLand">
                          <link itemprop="url" href="https://topland-rnd.ru">
                          <div itemprop="reviewBody" class="reviews-slide__text1">Работаем с компанией Topland 1,5 года. 
                            Хочу отметить оперативность в решении всех поставленных задач, инициативу и 
                            грамотную работу специалистов. Рассчитываю на дальнейшее плодотворное сотрудничество.</div>
                          <div itemprop="author" itemscope itemtype="https://schema.org/Person" class="reviews-slide__text2"><span itemprop="name">Вячеслав</span> <span itemprop="familyName">Шарыпкин</span></div>
                          <div class="reviews-slide__text3">Директор Trax.su</div>

                          <div class="d-none" itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization">
                              <meta itemprop="name" content="Отзыв о компании TopLand">
                              <meta itemprop="telephone" content="+7 993 453-63-07">
                              <link itemprop="url" href="https://topland-rnd.ru/"/>
                              <meta itemprop="email" content="sales@topland-rnd.ru">
                              <p itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                                  <meta itemprop="addressLocality" content="Ростов">
                                  <meta itemprop="streetAddress" content="Стабильная, 9">
                              </p>
                          </div>
                          <div class="d-none" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                              <meta itemprop="worstRating" content="1">
                              <meta itemprop="ratingValue" content="5">
                              <meta itemprop="bestRating" content="5"/>
                          </div>
                        </div> -->

                        <!-- <div class="reviews-block__slide reviews-slide">
                          <div class="reviews-slide__text1">Работаем с компанией Topland 1,5 года.
                            Хочу отметить оперативность в решении всех поставленных задач, инициативу и 
                            грамотную работу специалистов. Рассчитываю на дальнейшее плодотворное сотрудничество.</div>
                          <div class="reviews-slide__text2">Вячеслав Шарыпкин222</div>
                          <div class="reviews-slide__text3">Директор Trax.su</div>
                        </div> -->

                      </div>
                      <div class="slider-controls">
                        <button type="button" class="reviews_slide-m-prev slide-m-prev"></button>
                        <div class="reviews_slide-m-dots slide-m-dots"></div>
                        <button type="button" class="reviews_slide-m-next slide-m-next"></button>
                      </div>
                    </div> 
                  </div>
                </div>
              </div>
            </section>
            
                <section class="page__service-selection service-selection">
                    <div class="service-selection__container _container">
                        <div class="service-selection__body">                        
                            <div class="service-selection__lightning_left">
                                <img class="lightning_left" loading="lazy" src="<?php echo get_template_directory_uri()?>/static/img/Light_left.svg" alt="lightning left">
                            </div>
                            <div class="service-selection__content">         
                                <div class="service-selection__title">
                                    <h2 class="_h2 service-selection__title_h2 section_title">Don't know which service to choose?</h2>
                                </div>
                                <div class="service-selection__subtitle toplend">Write to us. We will tell you what service will bring your company more profit</div>
                                <div class="page_contacts-form contact_form-grid">
                                    <?php echo do_shortcode('[contact-form-7 id="1968" title="Контактная форма 1"]'); ?>
                                </div>
                                <!-- <div class="service-selection__button">
                                    <a class="service-selection__href" href="https://wa.me/79934536307">Написать в What’sApp</a>
                                </div> -->
                            </div>
                            <div class="service-selection__lightning_right">
                                <img loading="lazy" src="<?php echo get_template_directory_uri()?>/static/img/Light_right.svg" alt="lightning right">
                            </div>                        
                        </div>
                    </div>
                </section>
            
            
            <section class="page__useful-articles useful-articles">
              <div class="useful-articles__container _container">
                <div class="useful-articles__body">
                  <div class="useful-articles__title">
                    <h2 class="_h2 useful-articles__title_h2 section_title">Useful articles</h2>
                  </div>
                  <div class="useful-articles__columns articles">
                    <?php $length = 0 ?>
                    <?php
                        $args_for_horz_news = [
                            'posts_per_page' => 3,
                            'category_name'  => 'blog',
                            'offset'         => 0,
                        ];
                        $query = new WP_Query( $args_for_horz_news );
                        while ($query->have_posts()) :
                            $query->the_post();
                            $length++;
                            if (is_null(get_the_post_thumbnail_url()) || empty(get_the_post_thumbnail_url()))
                                $post_thumbnail_url = get_template_directory_uri().'/static/empty-banner.gif';
                            else
                                $post_thumbnail_url = get_the_post_thumbnail_url();
                            $image_id = get_post_thumbnail_id();
                            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                            $image_title = get_the_title($image_id);
                    ?>
                        <a class="articles__item" href="<?php the_permalink() ?>">
                            <div class="articles__img"><img loading="lazy" src="<?= $post_thumbnail_url ?>" alt="<?php echo $image_alt ?>" title="<?php echo $image_title ?>"></div>
                            <div class="articles__title"><h3 class="articles__title_h3"><?php the_title() ?></h3></div>
                            <div class="articles__text"><?php the_excerpt() ?></div>
                        </a>
                    <?php
                        endwhile;
                        wp_reset_query();
                    ?>  
                  </div>
                  <div class="useful-articles__button"><a class="useful-articles__href" href="/category/blog">All articles</a></div>
                </div>
              </div>
            </section>

            <section>
              <div class="_container">
                <div class="tariffs_tabs__title">
                  <h2 class="_h2 section_title">Tariffs</h2>
                </div>
                <div class="tabs">
                  
                    <input type="radio" name="tab_btn" id="tab_btn_1" value="" checked>
                    <label for="tab_btn_1">Turnkey development</label>

                    <input type="radio" name="tab_btn" id="tab_btn_2" value="">
                    <label for="tab_btn_2">SEO</label>

                    <input type="radio" name="tab_btn" id="tab_btn_3" value="">
                    <label for="tab_btn_3">Contextual advertising</label>

                    <input type="radio" name="tab_btn" id="tab_btn_4" value="">
                    <label for="tab_btn_4">Marketplaces</label>
                                  
                        
                  <div id="tab_1" class="tabs_block">
                      <div class="tab_header">
                        <div class="tab_title">Turnkey development</div>
                        <div class="tab_price">from <span>900</span> $</div>
                      </div>
                      <div class="tab_body">
                      We develop individual websites with a selling design, interactive functionality 
                      for various business tasks. We thoroughly work through each of the stages of development. 
                      We pay special attention to the testing stage before the delivery of the project.
                      </div>
                      <div class="tab_footer">
                        <div class="tab_btn">

                        </div>
                      </div>
                  </div>

                  <div id="tab_2" class="tabs_block">
                      <div class="tab_header">
                        <div class="tab_title">SEO</div>
                        <div class="tab_price">from <span>500</span> $</div>
                      </div>
                      <div class="tab_body">
                      SEO promotion is an effective marketing tool that will bring you new customers with 
                      proper optimization. The results will not be visible immediately, as it happens in advertising. 
                      SEO is a long-term strategy that brings results for a longer time.
                      </div>
                      <div class="tab_footer">
                        <div class="tab_btn">
                      
                        </div>
                      </div>
                  </div>

                  <div id="tab_3" class="tabs_block">
                      <div class="tab_header">
                        <div class="tab_title">Contextual advertising</div>
                        <div class="tab_price">from <span>550</span> $ / month</div>
                      </div>
                      <div class="tab_body">
                      Contextual advertising is one of the most effective sources of traffic to your website. Advertising in 
                      Yandex and Google will help you increase sales many times over, notify and attract the right contingent 
                      of customers and develop a positive opinion about the company.
                      </div>
                      <div class="tab_footer">
                        <div class="tab_btn">
                      
                        </div>
                      </div>
                  </div>

                  <div id="tab_4" class="tabs_block">
                      <div class="tab_header">
                        <div class="tab_title">Marketplaces</div>
                        <div class="tab_price">from <span>550</span> $</div>
                      </div>
                      <div class="tab_body">
                      More and more companies appear on marketplaces in order to conduct their business there and make good profits. 
                      But the competition is huge everywhere. Therefore, you need to understand how you can stand out and effectively 
                      promote your product on the online platform.
                      </div>
                      <div class="tab_footer">
                        <div class="tab_btn">
                      
                        </div>
                      </div>
                  </div>

                </div>  
              </div>
            </section>

            <!-- <?php echo do_shortcode('[topland_cloudtag]'); ?> -->

            <section class="page__question question">
              <div class="question__container _container">
                <div class="question__body">
                  <div class="question-triple_stars_left"><img loading="lazy" class="triple-stars" src="<?php echo get_template_directory_uri()?>/static/img/triple_stars.svg" alt="img"></div>
                  
                  <div class="question-content">
                     <div class="question__title">
                       <h2 class="_h2 question__title_h2 section_title">Questions and answers</h2>
                     </div>
                     <div class="main_block__wrapper">
                       <div itemscope itemtype="https://schema.org/FAQPage" class="accordion faq_accordion" id="faq_accordion">

                               
    
                          <!-- <input type="checkbox" name="chacor" id="chacor1" checked="checked" />
                          <label for="chacor1">Чем ваша компания лучше других?</label>
                          <div class="acor-body">
                              <p>Основатели компании изначально были техническими специалистами, 
                           благодаря этому у компании есть четкая идеология работы с проектами. 
                           Мы не обещаем золотых гор, только реальные цифры и факты</p>
                          </div>
                          
                          <input type="checkbox" name="chacor" id="chacor2" />
                          <label for="chacor2">Я знаю более раскрученные компании. Они сделают дешевле. Зачем мне переплачивать?</label>
                          <div class="acor-body">
                              <p>Чего Вы хотите? За что Вы готовы платить? За работу или результат? 
                        Можно взять 10 000 рублей за работу, которая стоит 30 000.
                         Заплатив 10 000 – Вы их просто выкинете. 
                         Заплатив 30 000 – Вы отдадите их за конкретные цели и результаты. Так что нужно Вам?</p>
                          </div>
                          
                          <input type="checkbox" name="chacor" id="chacor3" />
                          <label for="chacor3">Почему так мало кейсов, которые можете показать?</label>
                          <div class="acor-body">
                              <p>Основатели компании длительное время работали в найме, затем на фрилансе, 
                        затем по подряду с более крупными компаниями. 
                        Именно поэтому большинство проектов относятся к чужим компаниям. 
                        Зато работали над ними именно мы. Мы были внутренним механизмом других компаний. 
                        Так что важнее? Обертка или содержание!?</p>
                          </div>

                          <input type="checkbox" name="chacor" id="chacor4" />
                          <label for="chacor4">Почему мы сами еще не в ТОПе?</label>
                          <div class="acor-body">
                              <p>Недавно мы начали заниматься своим сайтом. 
                        Так как ранее работали только в субподряде и по сарафанке, 
                        необходимости разработки и продвижения качественного сайта не было. 
                        Да и некогда было. В связи с расширением, появился отдел внутреннего маркетинга, 
                        который в данный момент и занимается данным вопросом.</p>
                          </div> -->
                        
                          <input type="checkbox" name="chacor" id="chacor5" />
                          <label for="chacor5">What is SEO?</label>
                          <div class="acor-body">
                              <p>Seo (Search Engine Optimization) is a set of works aimed at internal and external optimization, 
                                due to which the site is promoted in the TOP-10 of Yandex or Google search results for targeted user 
                                queries. TOP is the first page of a search engine. Raising the site in the TOP-10 is the main goal of 
                                Seo-specialists.</p>
                          </div>

                          <input type="checkbox" name="chacor" id="chacor6" />
                          <label for="chacor6">When will the result from SEO?</label>
                          <div class="acor-body">
                              <p>After the work with the site, search engines need time to index it. Search queries start to rank higher 
                                and higher over time until they get into the TOP-10 positions. This time interval is always different - 
                                on average from 2 to 6 months.</p>
                          </div>

                          <input type="checkbox" name="chacor" id="chacor7" />
                          <label for="chacor7">What guarantees can you provide?</label>
                          <div class="acor-body">
                              <p>We conclude a formal contract with each client. With the help of Seo, we will bring your site to the 
                                indicators of 70-90% of the collected commercial key queries in the TOP-10 in Rostov-on-Don, as well 
                                as throughout Russia. We will provide detailed reporting at each stage of the work being done. You can 
                                see the results of our successful projects in the case studies section.</p>
                          </div>

                          <input type="checkbox" name="chacor" id="chacor8" />
                          <label for="chacor8">Do you work only in Rostov-on-Don?</label>
                          <div class="acor-body">
                              <p>We provide Seo services both in Rostov-on-Don and throughout Russia. 
                                You can also order promotion abroad.</p>
                          </div>
                      
                      





                         <!-- <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="accordion__item close">
                           <div class="accordion__item_header">
                           <span itemprop="name">Чем ваша компания лучше других?</span> <img loading="lazy" class="Vector1" src="<?php echo get_template_directory_uri()?>/static/img/Vector1.svg" alt="img">
                           </div>
                           <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="accordion__item_body">
                           <span itemprop="text">Основатели компании изначально были техническими специалистами, 
                           благодаря этому у компании есть четкая идеология работы с проектами. 
                           Мы не обещаем золотых гор, только реальные цифры и факты</span>
                           </div>
                         </div>

                          <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="accordion__item close">
                            <div class="accordion__item_header">
                              <span itemprop="name">Я знаю более раскрученные компании. Они сделают <br> дешевле. 
                                Зачем мне переплачивать?</span> <img loading="lazy" class="Vector1" src="<?php echo get_template_directory_uri()?>/static/img/Vector1.svg" alt="img">
                            </div>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="accordion__item_body">
                                <span itemprop="text">Чего Вы хотите? За что Вы готовы платить? За работу или результат? 
                                Можно взять 10 000 рублей за работу, которая стоит 30 000.
                                Заплатив 10 000 – Вы их просто выкинете. 
                                Заплатив 30 000 – Вы отдадите их за конкретные цели и результаты. Так что нужно Вам?</span>
                            </div>
                          </div>

                      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="accordion__item close">
                        <div class="accordion__item_header">
                        <span itemprop="name">Почему так мало кейсов, которые можете показать?</span> <img loading="lazy" class="Vector1" src="<?php echo get_template_directory_uri()?>/static/img/Vector1.svg" alt="img">
                        </div>
                        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="accordion__item_body">
                        <span itemprop="text">Основатели компании длительное время работали в найме, затем на фрилансе, 
                        затем по подряду с более крупными компаниями. 
                        Именно поэтому большинство проектов относятся к чужим компаниям. 
                        Зато работали над ними именно мы. Мы были внутренним механизмом других компаний. 
                        Так что важнее? Обертка или содержание!?</span>
                        </div>
                      </div>

                      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="accordion__item close">
                        <div class="accordion__item_header">
                          <span itemprop="name">Почему мы сами еще не в ТОПе?</span> <img loading="lazy" class="Vector1" src="<?php echo get_template_directory_uri()?>/static/img/Vector1.svg" alt="img">
                        </div>
                        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="accordion__item_body">
                          <span itemprop="text">Недавно мы начали заниматься своим сайтом. 
                          Так как ранее работали только в субподряде и по сарафанке, 
                          необходимости разработки и продвижения качественного сайта не было. 
                          Да и некогда было. В связи с расширением, появился отдел внутреннего маркетинга, 
                          который в данный момент и занимается данным вопросом.</span>
                        </div>
                      </div> -->

                        </div>
                      </div>
                    </div>
                  <div class="question-triple_stars_right"><img loading="lazy" class="triple-stars" src="<?php echo get_template_directory_uri()?>/static/img/triple_stars.svg" alt="img"></div>
                </div>
              </div>
            </section>
<?php get_footer(); ?>