@extends('front-layout.layout')
@section('content')
<div id="content" class="site-content">
      <div class="vmagazine-home-wrapp">
        <div id="pl-38" class="panel-layout">
          <div id="pg-38-0" class="panel-grid panel-has-style">
            <div class=" panel-row-style panel-row-style-for-38-0" data-stretch-type="full-stretched">
              <div id="pgc-38-0-0" class="panel-grid-cell">
                <div id="panel-38-0-0-0"
                  class="so-panel widget widget_vmagazine_tab_posts_list vmagazine_tab_posts_list panel-first-child panel-last-child"
                  data-index="0">
                  <div class="panel-widget-style panel-widget-style-for-38-0-0-0">
                    <div class="vmagazine-fullwid-slider block-post-wrapper block_layout_2" data-count="6">
                      <div class="slick-wrap sl-before-load slick-initialized slick-slider">
                        <div class="slick-list draggable">
                          <div class="slick-track" style="opacity: 1; width: 7020px;">
                            
                            
                            
                            <!-- Print the last Article here -->
                            <div class="single-post clearfix slick-slide slick-current slick-active"
                              data-slick-index="0" aria-hidden="false" tabindex="0"
                              style="width: 1170px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                              <div class="post-thumb">
                                <img
                                  src="images/{{$posts[0]['thumbnail']}}"
                                  alt="{{$posts[0]['title']}}"
                                  title="{{$posts[0]['title']}}">
                                <div class="image-overlay"></div>
                              </div>

                              <div class="post-content-wrapper clearfix">
                                <span class="cat-links">
                                  <a href="https://www.ofeed.com/Catnew?Catagory=SS" class="cat-53" rel="category tag"
                                    tabindex="0">{{$posts[0]['category']['name']}}</a></span>
                                <div class="post-meta clearfix">
                                  <span class="posted-on"><i class="far fa-clock"></i>{{$posts[0]['readableCreatedAt']}}</span>
                                  <span class="comments"><i class="far fa-thumbs-up"></i>{{$posts[0]['likes_count']}}</span>
                                  <span class="post-view"><i class="fa fa-eye"></i>{{$posts[0]['views_count']}}</span>
                                </div>

                                <h3 class="extra-large-font">
                                  <a href="https://www.ofeed.com/%D8%A7%D9%84%D8%B3%D9%88%D9%82%20%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A/%D8%A7%D9%84%D8%AF%D8%B1%D9%8A%D8%B3-%D9%8A%D8%AD%D9%82%D9%82-%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81%D9%86%D8%A7-%D8%A7%D9%84%D8%A3%D9%88%D9%84-%D9%88%D9%8A%D9%82%D8%AA%D8%B1%D8%A8-%D9%85%D9%86-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81-%D8%A7%D9%84%D8%AB%D8%A7%D9%86%D9%8A-%D9%88%D8%A7%D9%84%D8%A7%D9%86-%D9%86%D9%86%D8%B5%D8%AD-%D8%A8%D8%A7%D9%84%D8%A7%D8%AA%D9%8A-"
                                    tabindex="0">{{$posts[0]['title']}}
                                  </a>
                                </h3>
                              </div>
                            </div>
                          <!-- ./Print the last Article here -->



                            <div class="single-post clearfix slick-slide" data-slick-index="1" aria-hidden="true"
                              tabindex="-1"
                              style="width: 1170px; position: relative; left: -1170px; top: 0px; z-index: 998; opacity: 0;">
                              <div class="post-thumb">
                                <img
                                  src="images/4d8f7f02-d77d-4cc0-aab1-5517f709899a.jpg"
                                  alt="القطاع الصناعي بريطانيا " title="القطاع الصناعي بريطانيا ">
                                <div class="image-overlay"></div>
                              </div>

                              <div class="post-content-wrapper clearfix">
                                <span class="cat-links">
                                  <a href="https://www.ofeed.com/Catnew?Catagory=FG" class="cat-53" rel="category tag"
                                    tabindex="-1">جراف العملات</a></span>
                                <div class="post-meta clearfix">
                                  <span class="posted-on"><i class="far fa-clock"></i>4 hours ago</span>
                                  <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                  <span class="post-view"><i class="fa fa-eye"></i>39</span>
                                </div>

                                <h3 class="extra-large-font">
                                  <a href="https://www.ofeed.com/%D8%AC%D8%B1%D8%A7%D9%81%20%D8%A7%D9%84%D8%B9%D9%85%D9%84%D8%A7%D8%AA/%D8%A7%D9%84%D9%82%D8%B7%D8%A7%D8%B9-%D8%A7%D9%84%D8%B5%D9%86%D8%A7%D8%B9%D9%8A-%D9%81%D9%8A-%D8%A8%D8%B1%D9%8A%D8%B7%D8%A7%D9%86%D9%8A%D8%A7-%D9%8A%D8%B9%D9%88%D8%AF-%D8%A5%D9%84%D9%89-%D8%A7%D9%84%D9%86%D9%85%D9%88"
                                    tabindex="-1">القطاع الصناعي في بريطانيا يعود إلى النمو</a>
                                </h3>
                              </div>
                            </div>
                            <div class="single-post clearfix slick-slide" data-slick-index="2" aria-hidden="true"
                              tabindex="-1"
                              style="width: 1170px; position: relative; left: -2340px; top: 0px; z-index: 998; opacity: 0;">
                              <div class="post-thumb">
                                <img
                                  src="images/40fc0813-5901-4450-b831-bb721280f324.jpg"
                                  alt="منطقة اليورو" title="منطقة اليورو ">
                                <div class="image-overlay"></div>
                              </div>

                              <div class="post-content-wrapper clearfix">
                                <span class="cat-links">
                                  <a href="https://www.ofeed.com/Catnew?Catagory=FC" class="cat-53" rel="category tag"
                                    tabindex="-1">التحليل الأساسي</a></span>
                                <div class="post-meta clearfix">
                                  <span class="posted-on"><i class="far fa-clock"></i>5 hours ago</span>
                                  <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                  <span class="post-view"><i class="fa fa-eye"></i>36</span>
                                </div>

                                <h3 class="extra-large-font">
                                  <a href="https://www.ofeed.com/%D8%A7%D9%84%D8%AA%D8%AD%D9%84%D9%8A%D9%84%20%D8%A7%D9%84%D8%A3%D8%B3%D8%A7%D8%B3%D9%8A/%D8%AA%D8%B9%D8%A7%D9%81%D9%8A-%D9%83%D8%A8%D9%8A%D8%B1-%D9%81%D9%8A-%D9%85%D8%B3%D8%AA%D9%88%D9%8A%D8%A7%D8%AA-%D8%A7%D9%84%D9%8A%D9%88%D8%B1%D9%88-%D8%A8%D8%B9%D8%AF-%D8%AA%D9%82%D9%84%D8%B5-%D8%A7%D9%86%D9%83%D9%85%D8%A7%D8%B4-%D9%85%D9%86%D8%B7%D9%82%D8%A9-%D8%A7%D9%84%D9%8A%D9%88%D8%B1%D9%88"
                                    tabindex="-1">تعافي كبير في مستويات اليورو بعد تقلص انكماش منطقة اليورو</a>
                                </h3>
                              </div>
                            </div>
                            <div class="single-post clearfix slick-slide" data-slick-index="3" aria-hidden="true"
                              tabindex="-1"
                              style="width: 1170px; position: relative; left: -3510px; top: 0px; z-index: 998; opacity: 0;">
                              <div class="post-thumb">
                                <img
                                  src="images/aa2897bf-3450-45f3-8e9c-81bbdfe1d2ed.jpg"
                                  alt="اليوان الرقمي الصيني " title="اليوان الرقمي الصيني ">
                                <div class="image-overlay"></div>
                              </div>

                              <div class="post-content-wrapper clearfix">
                                <span class="cat-links">
                                  <a href="https://www.ofeed.com/Catnew?Catagory=CC" class="cat-53" rel="category tag"
                                    tabindex="-1">العملات الرقمية</a></span>
                                <div class="post-meta clearfix">
                                  <span class="posted-on"><i class="far fa-clock"></i>1 days ago</span>
                                  <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                  <span class="post-view"><i class="fa fa-eye"></i>90</span>
                                </div>

                                <h3 class="extra-large-font">
                                  <a href="https://www.ofeed.com/%D8%A7%D9%84%D8%B9%D9%85%D9%84%D8%A7%D8%AA%20%D8%A7%D9%84%D8%B1%D9%82%D9%85%D9%8A%D8%A9/%D8%A7%D9%84%D9%8A%D9%88%D8%A7%D9%86-%D8%A7%D9%84%D8%B1%D9%82%D9%85%D9%8A-%D8%A7%D9%84%D8%B5%D9%8A%D9%86%D9%8A-%D9%82%D8%AF-%D9%8A%D8%AE%D8%B1%D8%AC-%D8%A5%D9%84%D9%89-%D8%A7%D9%84%D9%86%D9%88%D8%B1-%D9%82%D8%B1%D9%8A%D8%A8%D9%8B%D8%A7"
                                    tabindex="-1">اليوان الرقمي الصيني قد يخرج إلى النور قريبًا</a>
                                </h3>
                              </div>
                            </div>
                            <div class="single-post clearfix slick-slide" data-slick-index="4" aria-hidden="true"
                              tabindex="-1"
                              style="width: 1170px; position: relative; left: -4680px; top: 0px; z-index: 998; opacity: 0;">
                              <div class="post-thumb">
                                <img
                                  src="images/90eb55a9-ac64-45a3-ad66-85a0068e7752.jpg"
                                  alt="المركزي الصيني " title="المركزي الصيني ">
                                <div class="image-overlay"></div>
                              </div>

                              <div class="post-content-wrapper clearfix">
                                <span class="cat-links">
                                  <a href="https://www.ofeed.com/Catnew?Catagory=FN" class="cat-53" rel="category tag"
                                    tabindex="-1">اخبار العملات</a></span>
                                <div class="post-meta clearfix">
                                  <span class="posted-on"><i class="far fa-clock"></i>1 days ago</span>
                                  <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                  <span class="post-view"><i class="fa fa-eye"></i>53</span>
                                </div>

                                <h3 class="extra-large-font">
                                  <a href="https://www.ofeed.com/%D8%A7%D8%AE%D8%A8%D8%A7%D8%B1%20%D8%A7%D9%84%D8%B9%D9%85%D9%84%D8%A7%D8%AA/%D8%B9%D9%88%D8%AF%D8%A9-%D8%AA%D9%81%D8%B4%D9%8A-%D9%83%D9%88%D8%B1%D9%88%D9%86%D8%A7-%D9%8A%D8%AF%D9%81%D8%B9-%D8%A7%D9%84%D9%85%D8%B1%D9%83%D8%B2%D9%8A-%D8%A7%D9%84%D8%B5%D9%8A%D9%86%D9%8A-%D8%A5%D9%84%D9%89-%D8%AA%D8%AB%D8%A8%D9%8A%D8%AA-%D8%B3%D8%B9%D8%B1-%D8%A7%D9%84%D9%81%D8%A7%D8%A6%D8%AF%D8%A9"
                                    tabindex="-1">عودة تفشي كورونا يدفع المركزي الصيني إلى تثبيت سعر الفائدة</a>
                                </h3>
                              </div>
                            </div>
                            <div class="single-post clearfix slick-slide" data-slick-index="5" aria-hidden="true"
                              tabindex="-1"
                              style="width: 1170px; position: relative; left: -5850px; top: 0px; z-index: 998; opacity: 0;">
                              <div class="post-thumb">
                                <img
                                  src="images/d470861e-e44f-4dae-988c-04af738641fb.jpg"
                                  alt="شركة فوري لتكنولوجيا البنوك والمدفوعات الإلكترونية"
                                  title="شركة فوري لتكنولوجيا البنوك والمدفوعات الإلكترونية">
                                <div class="image-overlay"></div>
                              </div>

                              <div class="post-content-wrapper clearfix">
                                <span class="cat-links">
                                  <a href="https://www.ofeed.com/Catnew?Catagory=ES" class="cat-53" rel="category tag"
                                    tabindex="-1">السوق المصري</a></span>
                                <div class="post-meta clearfix">
                                  <span class="posted-on"><i class="far fa-clock"></i>1 days ago</span>
                                  <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                  <span class="post-view"><i class="fa fa-eye"></i>43</span>
                                </div>

                                <h3 class="extra-large-font">
                                  <a href="https://www.ofeed.com/%D8%A7%D9%84%D8%B3%D9%88%D9%82%20%D8%A7%D9%84%D9%85%D8%B5%D8%B1%D9%8A/%D9%81%D9%88%D8%B1%D9%8A-%D9%8A%D8%AD%D9%82%D9%82-%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81%D9%86%D8%A7-%D9%88%D9%8A%D8%B3%D8%AC%D9%84-%D8%A3%D8%B9%D9%84%D9%89-%D8%B3%D8%B9%D8%B1-%D9%81%D9%8A-%D8%AA%D8%A7%D8%B1%D9%8A%D8%AE%D9%87-"
                                    tabindex="-1">فوري يحقق مستهدفنا ويسجل أعلى سعر في تاريخه </a>
                                </h3>
                              </div>
                            </div>
                          </div>
                        </div>











                      </div>
                      <div class="vmagazine-container">
                        <div
                          class="posts-tab-wrap sl-before-load slick-initialized slick-slider slick-vertical mCustomScrollbar _mCS_1">
                          <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside"
                            style="max-height: none;" tabindex="0">
                            <div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;"
                              dir="ltr">
                              <div class="slick-list draggable" style="height: 672px;">
                                <div class="slick-track"
                                  style="opacity: 1; height: 672px; transform: translate3d(0px, 0px, 0px);">
                                  
                                  <!-- Render the side bar posts dynamically -->
                                  @foreach($posts as $post)
                                  <div class="single-post clearfix slick-slide slick-active" data-slick-index="{{$loop->index+1}}"
                                    aria-hidden="false" tabindex="0" style="width: 356px;">
                                    <div class="slider-nav-inner-wrapper">
                                      <div class="post-thumb">
                                        <a href="javascript:void(0)" class="thumb-zoom" rel="noreferrer" tabindex="0">
                                          <img src="images/{{$post['thumbnail']}}"
                                            alt="{{$post['title']}}"
                                            title="{{$post['title']}}"
                                            class="mCS_img_loaded">
                                          <div class="image-overlay"></div>
                                        </a>
                                      </div>

                                      <div class="post-caption-wrapper">
                                        <span class="posted-on"><i class="far fa-clock"></i>{{$post['readableCreatedAt']}}</span>
                                        <h2 class="large-font"><a
                                            href="https://www.ofeed.com/Fundamental_Comment/{{$post['slug']}}"
                                            tabindex="0">{{$post['title']}}</a></h2>
                                      </div>
                                    </div>
                                  </div>
                                @endforeach
                                <!-- ./Render the side bar posts dynamically -->
                             








                                </div>
                              </div>





                            </div>
                            <div id="mCSB_1_scrollbar_vertical"
                              class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical"
                              style="display: block;">
                              <div class="mCSB_draggerContainer">
                                <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
                                  style="position: absolute; min-height: 30px; display: block; height: 200px; max-height: 380px; top: 0px;">
                                  <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                </div>
                                <div class="mCSB_draggerRail"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="pg-38-1" class="panel-grid panel-has-style" style="direction: rtl;">
            <div class="panel-row-style panel-row-style-for-38-1">
              <div id="pgc-38-1-1" class="panel-grid-cell">
                <div id="panel-38-1-1-0"
                  class="so-panel widget widget_vmagazine_block_posts_column vmagazine_block_posts_column panel-first-child"
                  data-index="2">
                  <div class="panel-widget-style panel-widget-style-for-38-1-1-0">
                    <div class="wrapper-vmagazine-post-col block_layout_1">
                      <h4 class="block-title"><span class="title-bg">التحليل الفني</span></h4>
                      <div class="vmagazine-post-col block-post-wrapper block_layout_1 wow zoomIn"
                        data-wow-duration="1s"
                        style="visibility: visible; animation-duration: 1s; animation-name: zoomIn;">
                        <div class="block-header clearfix">
                        </div>
                        @php
                          $category = null;
                          $firstPost = null;
                          $catPosts = null;
                          foreach($categories as $cat) {
                            if($cat->name === 'التحليل الفني') {
                              $category = $cat;
                              $firstPost = $category->posts[0];
                              $catPosts = $category->posts;
                            }
                          }
                        @endphp
                        
                        <div class="single-post first clearfix">
                          <div class="post-thumb">
                            <a class="thumb-zoom"
                              href="https://www.ofeed.com/{{$firstPost['slug']}}"
                              title="{{$firstPost['title']}}">
                              <img
                                src="images/{{$firstPost['thumbnail']}}"
                                alt="{{$firstPost['title']}}" title="{{$firstPost['title']}}">
                              <div class="image-overlay"></div>
                            </a>
                          </div>
                          <div class="content-wrapper">
                            <div class="post-meta clearfix">
                              <span class="posted-on"><i class="far fa-clock"></i>{{$firstPost['readableCreatedAt']}}</span>
                              <span class="comments"><i class="far fa-thumbs-up"></i>{{$firstPost['likes_count']}}</span>
                              <span class="post-view"><i class="fa fa-eye"></i>{{$firstPost['views_count']}}</span>
                            </div>

                            <h2 class="large-font">
                              <a
                                href="https://www.ofeed.com/{{$firstPost['slug']}}">{{$firstPost['title']}}</a>
                            </h2>
                          </div>
                        </div>


                        @foreach($catPosts as $key => $catPost)
                        @if($key > 0)
                        <div class="single-post bottom-post clearfix">
                          <div class="content-wrapper">
                            <h2 class="small-font">
                              <a
                                href="https://www.ofeed.com/{{$catPost['slug']}}">{{$catPost['title']}}</a>
                            </h2>
                          </div>

                        </div>
                        @endif
                        @endforeach

                        
                        
                        <span class="view-all"><a href="https://www.ofeed.com/Catnew?Catagory=TA">شاهد المزيد</a></span>
                      </div>

                    </div>
                  </div>
                </div>
                <div id="panel-38-1-1-1" class="so-panel widget widget_vmagazine_medium_ad vmagazine_medium_ad"
                  data-index="3">
                  <div class="panel-widget-style panel-widget-style-for-38-1-1-1">
                    <div class="vmagazine-medium-rectangle-ad medium-rectangle-wrapper">
                      <a href="https://www.ofeed.com/price_plansar" target="_blank">
                        <img src="images/4a.png" alt="Home" title="Home">
                        <p>أعلان</p>
                      </a>
                    </div>
                  </div>
                </div>
                <div id="panel-38-1-1-2" class="so-panel widget widget_vmagazine_featured_slider panel-last-child"
                  data-index="4">
                  <div class="panel-widget-style panel-widget-style-for-38-1-1-2">
                    <div class="wrapper-vmagazine-post-col block_layout_1">
                      <h4 class="block-title"><span class="title-bg">التحليل الأساسي</span></h4>
                      <div class="vmagazine-post-col block-post-wrapper block_layout_1 wow zoomIn"
                        data-wow-duration="1s"
                        style="visibility: visible; animation-duration: 1s; animation-name: zoomIn;">
                        <div class="block-header clearfix">
                        </div>
                        
                        
                        @php
                          $category = null;
                          $firstPost = null;
                          $catPosts = null;
                          foreach($categories as $cat) {
                            if($cat->name === 'التحليل الاساسي') {
                              $category = $cat;
                              $firstPost = $category->posts[0];
                              $catPosts = $category->posts;
                            }
                          }
                        @endphp


                        <div class="single-post first clearfix">
                          <div class="post-thumb">
                            <a class="thumb-zoom"
                              href="https://www.ofeed.com/{{$firstPost['slug']}}"
                              title="{{$firstPost['title']}} ">
                              <img
                                src="images/{{$firstPost['thumbnail']}}"
                                alt="{{$firstPost['title']}}" title="{{$firstPost['title']}} ">
                              <div class="image-overlay"></div>
                            </a>
                          </div>
                          <div class="content-wrapper">
                            <div class="post-meta clearfix">
                              <span class="post-view"><i class="far fa-eye"></i>{{$firstPost['views_count']}}</span>
                              <span class="comments"><i class="far fa-thumbs-up"></i>{{$firstPost['likes_count']}}</span>
                              <span class="posted-on"><i class="far fa-clock"></i>{{$firstPost['readableCreatedAt']}}</span>
                            </div>

                            <h2 class="large-font">
                              <a
                                href="https://www.ofeed.com/{{$firstPost['slug']}}">{{$firstPost['title']}}</a>
                            </h2>
                          </div>

                        </div>
                        @foreach($catPosts as $key => $catPost)
                        @if($key > 0)
                        <div class="single-post bottom-post clearfix">
                          <div class="content-wrapper">
                            <h2 class="small-font">
                              <a
                                href="https://www.ofeed.com/{{$catPost['slug']}}">{{$catPost['title']}}</a>
                            </h2>
                          </div>

                        </div>
                        @endif
                        @endforeach
                      

                        <span class="view-all"><a href="https://www.ofeed.com/Catnew?Catagory=FC">شاهد المزيد</a></span>
                      </div>

                    </div>
                  </div>
                </div>
                <div id="panel-38-1-1-3" class="so-panel widget widget_vmagazine_featured_slider panel-last-child"
                  data-index="4">
                  <div class="panel-widget-style panel-widget-style-for-38-1-1-2">
                    <div class="vmagazine-medium-rectangle-ad medium-rectangle-wrapper">
                      <a href="https://www.ofeed.com/price_plansar" target="_blank">
                        <img src="images/4a.png" alt="Home" title="Home">
                        <p>أعلان</p>
                      </a>

                    </div>

                  </div>
                </div>
              </div>
              <div id="pgc-38-1-2" class="panel-grid-cell">
                <div id="panel-38-1-2-0"
                  class="block_layout_2 so-panel widget widget_vmagazine_category_posts_slider vmagazine_category_posts_slider panel-first-child"
                  data-index="5">
                  <div class="block_layout_2 panel-widget-style panel-widget-style-for-38-1-2-0"
                    style=" direction: ltr; ">
                    <div class="vmagazine-cat-slider block-post-wrapper block_layout_2 no-bg">
                      <h4 class="block-title"><span class="title-bg">الأكثر مشاهدة</span></h4>
                      <div class="lSSlideOuter">
                        <div class="lSSlideWrapper usingCss"
                          style="transition-duration: 700ms; transition-timing-function: ease;">
                          <div class="lSSlideOuter">
                            <div class="lSSlideWrapper usingCss">
                              <ul class="featuredSlider widget-cat-slider lightSlider lsGrab lSSlide"
                                style="width: 2268px; transform: translate3d(-1134px, 0px, 0px); height: 230px; padding-bottom: 0%;">
                                
                                <li class="slide single-post clearfix clone left lslide"
                                  style="width: 378px; margin-right: 0px;">
                                  <div class="post-thumb">
                                    <img
                                      src="images/0d913edc-e208-46dd-9b9c-b825c5c20997.jpg"
                                      alt="شركة سي أي كابيتال القابضة للاستثمارات المالية"
                                      title="شركة سي أي كابيتال القابضة للاستثمارات المالية">
                                  </div>
                                  <div class="post-caption">
                                    <div class="post-meta">
                                      <span class="posted-on"><i class="far fa-clock"></i>last week</span>
                                      <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                      <span class="post-view"><i class="fa fa-eye"></i>91</span>
                                    </div>

                                    <h3 class="small-font">
                                      <a
                                        href="https://www.ofeed.com/%D8%A7%D9%84%D8%B3%D9%88%D9%82%20%D8%A7%D9%84%D9%85%D8%B5%D8%B1%D9%8A/%D8%B3%D9%8A-%D8%A3%D9%8A-%D9%83%D8%A7%D8%A8%D9%8A%D8%AA%D8%A7%D9%84-%D8%AA%D8%AE%D8%AA%D8%A8%D8%B1-%D9%85%D9%82%D8%A7%D9%88%D9%85%D8%A9-%D8%B1%D8%A6%D9%8A%D8%B3%D9%8A%D8%A9-%D9%88%D9%81%D9%8A-%D8%AD%D8%A7%D9%84%D8%A9-%D8%A7%D8%AE%D8%AA%D8%B1%D8%A7%D9%82%D9%87%D8%A7-%D9%8A%D8%B3%D8%AA%D9%87%D8%AF%D9%81-%D8%A7%D9%84%D8%B3%D9%87%D9%85-%D9%87%D8%B0%D9%87-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%88%D9%8A%D8%A7%D8%AA-">سي
                                        أي كابيتال تختبر مقاومة رئيسية وفي حالة اختراقها يستهدف السهم هذه المستويات </a>
                                    </h3>
                                  </div>

                                </li>
                                <li class="slide single-post clearfix lslide" style="width: 378px; margin-right: 0px;">
                                  <div class="post-thumb">
                                    <img
                                      src="images/3f6afd62-8334-40ef-9f00-4541ae879eb2.jpg"
                                      alt="الاحتياطي الفيدرالي " title="الاحتياطي الفيدرالي ">
                                  </div>
                                  <div class="post-caption">
                                    <div class="post-meta">
                                      <span class="posted-on"><i class="far fa-clock"></i>last week</span>
                                      <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                      <span class="post-view"><i class="fa fa-eye"></i>111</span>
                                    </div>

                                    <h3 class="small-font">
                                      <a
                                        href="https://www.ofeed.com/%D8%A7%D9%84%D8%AA%D8%AD%D9%84%D9%8A%D9%84%20%D8%A7%D9%84%D8%A3%D8%B3%D8%A7%D8%B3%D9%8A/%D8%A7%D9%84%D8%A7%D8%AD%D8%AA%D9%8A%D8%A7%D8%B7%D9%8A-%D8%A7%D9%84%D9%81%D9%8A%D8%AF%D8%B1%D8%A7%D9%84%D9%8A-%D9%8A%D8%A8%D9%82%D9%8A-%D8%B9%D9%84%D9%89-%D8%A3%D8%B3%D8%B9%D8%A7%D8%B1-%D8%A7%D9%84%D9%81%D8%A7%D8%A6%D8%AF%D8%A9-%D9%88%D9%8A%D8%B3%D8%AA%D9%85%D8%B1-%D9%81%D9%8A-%D8%A7%D9%84%D8%AA%D8%AD%D9%81%D9%8A%D8%B2">الاحتياطي
                                        الفيدرالي يبقي على أسعار الفائدة ويستمر في التحفيز</a>
                                    </h3>
                                  </div>

                                </li>
                                <!-- Most Viewed the First Image only -->
                              <li class="slide single-post clearfix clone left lslide active"
                                style="width: 378px; margin-right: 0px;">
                                <div class="post-thumb">
                                  <img src="images/{{$mostViewed[0]['thumbnail']}}"
                                    alt="{{$mostViewed[0]['title']}}"
                                    title="{{$mostViewed[0]['title']}}">
                                </div>
                                <div class="post-caption">
                                  <div class="post-meta" style="color:white;">
                                    <span class="posted-on"><i class="far fa-clock"></i>{{$mostViewed[0]['readableCreatedAt']}}</span>
                                    <span class="likes"><i class="far fa-thumbs-up">{{$mostViewed[0]['likes_count']}}</i></span>
                                    <span class="post-view"><i class="fa fa-eye"></i>{{$mostViewed[0]['views_count']}}</span>
                                  </div>

                                  <h3 class="small-font">
                                    <a
                                      href="https://www.ofeed.com/Fundamental_Comment/{{$mostViewed[0]['slug']}}">{{$mostViewed[0]['title']}}</a>
                                  </h3>
                                </div>

                              </li>
                              <!-- Most Viewed the First Image only -->
                                <li class="slide single-post clearfix lslide active"
                                  style="width: 378px; margin-right: 0px;">
                                  <div class="post-thumb">
                                    <img
                                      src="images/6bdb9bc2-668c-44c4-9c41-ac1e3a4f8330.jpg"
                                      alt="شركة السويدي إليكتريك" title="شركة السويدي إليكتريك">
                                  </div>
                                  <div class="post-caption">
                                    <div class="post-meta">
                                      <span class="posted-on"><i class="far fa-clock"></i>6 days ago</span>
                                      <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                      <span class="post-view"><i class="fa fa-eye"></i>93</span>
                                    </div>

                                    <h3 class="small-font">
                                      <a
                                        href="https://www.ofeed.com/%D8%A7%D9%84%D8%B3%D9%88%D9%82%20%D8%A7%D9%84%D9%85%D8%B5%D8%B1%D9%8A/%D8%A7%D9%84%D8%B3%D9%88%D9%8A%D8%AF%D9%8A-%D8%A5%D9%84%D9%8A%D9%83%D8%AA%D8%B1%D9%8A%D9%83-%D9%88%D8%AD%D8%B2%D9%85%D9%87-%D9%85%D9%86-%D8%A7%D9%84%D8%A7%D8%AE%D8%A8%D8%A7%D8%B1-%D8%A7%D9%84%D8%A7%D9%8A%D8%AC%D8%A7%D8%A8%D9%8A%D8%A9-%D9%88%D9%84%D9%83%D9%86-%D8%A7%D9%84%D8%B3%D9%87%D9%85--%D9%8A%D8%B3%D8%AA%D9%82%D8%A8%D9%84%D9%87%D8%A7-%D8%A8%D9%85%D8%B2%D9%8A%D8%AF-%D9%85%D9%86-%D8%A7%D9%84%D9%87%D8%A8%D9%88%D8%B7-">السويدي
                                        إليكتريك وحزمه من الاخبار الايجابية ولكن السهم يستقبلها بمزيد من الهبوط </a>
                                    </h3>
                                  </div>

                                </li>
                                <li class="slide single-post clearfix lslide" style="width: 378px; margin-right: 0px;">
                                  <div class="post-thumb">
                                    <img
                                      src="images/0d913edc-e208-46dd-9b9c-b825c5c20997.jpg"
                                      alt="شركة سي أي كابيتال القابضة للاستثمارات المالية"
                                      title="شركة سي أي كابيتال القابضة للاستثمارات المالية">
                                  </div>
                                  <div class="post-caption">
                                    <div class="post-meta">
                                      <span class="posted-on"><i class="far fa-clock"></i>last week</span>
                                      <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                      <span class="post-view"><i class="fa fa-eye"></i>91</span>
                                    </div>

                                    <h3 class="small-font">
                                      <a
                                        href="https://www.ofeed.com/%D8%A7%D9%84%D8%B3%D9%88%D9%82%20%D8%A7%D9%84%D9%85%D8%B5%D8%B1%D9%8A/%D8%B3%D9%8A-%D8%A3%D9%8A-%D9%83%D8%A7%D8%A8%D9%8A%D8%AA%D8%A7%D9%84-%D8%AA%D8%AE%D8%AA%D8%A8%D8%B1-%D9%85%D9%82%D8%A7%D9%88%D9%85%D8%A9-%D8%B1%D8%A6%D9%8A%D8%B3%D9%8A%D8%A9-%D9%88%D9%81%D9%8A-%D8%AD%D8%A7%D9%84%D8%A9-%D8%A7%D8%AE%D8%AA%D8%B1%D8%A7%D9%82%D9%87%D8%A7-%D9%8A%D8%B3%D8%AA%D9%87%D8%AF%D9%81-%D8%A7%D9%84%D8%B3%D9%87%D9%85-%D9%87%D8%B0%D9%87-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%88%D9%8A%D8%A7%D8%AA-">سي
                                        أي كابيتال تختبر مقاومة رئيسية وفي حالة اختراقها يستهدف السهم هذه المستويات </a>
                                    </h3>
                                  </div>

                                </li>
                                <li class="slide single-post clearfix clone right lslide"
                                  style="width: 378px; margin-right: 0px;">
                                  <div class="post-thumb">
                                    <img
                                      src="images/3f6afd62-8334-40ef-9f00-4541ae879eb2.jpg"
                                      alt="الاحتياطي الفيدرالي " title="الاحتياطي الفيدرالي ">
                                  </div>
                                  <div class="post-caption">
                                    <div class="post-meta">
                                      <span class="posted-on"><i class="far fa-clock"></i>last week</span>
                                      <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                      <span class="post-view"><i class="fa fa-eye"></i>111</span>
                                    </div>

                                    <h3 class="small-font">
                                      <a
                                        href="https://www.ofeed.com/%D8%A7%D9%84%D8%AA%D8%AD%D9%84%D9%8A%D9%84%20%D8%A7%D9%84%D8%A3%D8%B3%D8%A7%D8%B3%D9%8A/%D8%A7%D9%84%D8%A7%D8%AD%D8%AA%D9%8A%D8%A7%D8%B7%D9%8A-%D8%A7%D9%84%D9%81%D9%8A%D8%AF%D8%B1%D8%A7%D9%84%D9%8A-%D9%8A%D8%A8%D9%82%D9%8A-%D8%B9%D9%84%D9%89-%D8%A3%D8%B3%D8%B9%D8%A7%D8%B1-%D8%A7%D9%84%D9%81%D8%A7%D8%A6%D8%AF%D8%A9-%D9%88%D9%8A%D8%B3%D8%AA%D9%85%D8%B1-%D9%81%D9%8A-%D8%A7%D9%84%D8%AA%D8%AD%D9%81%D9%8A%D8%B2">الاحتياطي
                                        الفيدرالي يبقي على أسعار الفائدة ويستمر في التحفيز</a>
                                    </h3>
                                  </div>

                                </li>
                              </ul>
                              <div class="lSAction"><a class="lSPrev"></a><a class="lSNext"></a></div>
                            </div>
                            <ul class="lSPager lSpg" style="margin-top: 5px;">
                              <li class=""><a href="https://www.ofeed.com/#">1</a></li>
                              <li class=""><a href="https://www.ofeed.com/#">2</a></li>
                              <li class="active"><a href="https://www.ofeed.com/#">3</a></li>
                              <li><a href="https://www.ofeed.com/#">4</a></li>
                              <li class=""><a href="https://www.ofeed.com/#">5</a></li>
                              <li><a href="https://www.ofeed.com/#">6</a></li>
                            </ul>
                          </div>
                          <div class="lSAction"><a class="lSPrev"></a><a class="lSNext"></a></div>
                        </div>
                        <ul class="lSPager lSpg" style="margin-top: 5px;">
                          <li><a href="https://www.ofeed.com/#">undefined</a></li>
                          <li><a href="https://www.ofeed.com/#">undefined</a></li>
                          <li><a href="https://www.ofeed.com/#">undefined</a></li>
                          <li><a href="https://www.ofeed.com/#">undefined</a></li>
                          <li><a href="https://www.ofeed.com/#">undefined</a></li>
                          <li><a href="https://www.ofeed.com/#">undefined</a></li>
                        </ul>
                      </div>

                    </div>

                  </div>
                </div>
                <div id="panel-38-1-2-1" class="so-panel widget widget_vmagazine_medium_ad vmagazine_medium_ad"
                  data-index="6">
                  <div class="vmagazine-medium-rectangle-ad medium-rectangle-wrapper">
                    <a href="https://www.ofeed.com/" target="_blank">
                      <img src="images/3a.png" alt="Home" title="Home">
                      <p>أعلان</p>
                    </a>
                  </div>
                </div>
                <div id="panel-38-1-2-2" class="widget_text so-panel widget widget_custom_html" data-index="7">
                  <div class="widget_text sty-con-less-padd panel-widget-style panel-widget-style-for-38-1-2-2">
                    <h2 class="widget-title"><span class="title-bg">تواصل معنا</span></h2>
                    <div class="textwidget custom-html-widget">
                      <div class="apsc-icons-wrapper  apsc-theme-13" data-hover-color="0">
                        <div class="apsc-each-profile ">
                          <a class="apsc-facebook-icon apsc-icon-soc clearfix"
                            href="https://www.facebook.com/Ofeeddotcom" target="_blank" rel="noreferrer">
                            <div class="apsc-inner-block">
                              <span class="social-icon"><span class="apsc-fa-icon"><i
                                    class="fab fa-facebook fa-3x apsc-facebook"></i></span><span
                                  class="media-name"><span class="apsc-social-name">Facebook</span></span></span>
                              <div class="apsc-count-wrapper"><span class="apsc-media-type">follow</span></div>
                            </div>
                          </a>
                          <a class="apsc-bttn-bg" href="https://www.facebook.com/Ofeeddotcom" target="_blank"
                            rel="noreferrer">
                            <div class="apsc_bttn">follow</div>
                          </a>
                        </div>
                        <div class="apsc-each-profile ">
                          <a class="apsc-twitter-icon apsc-icon-soc clearfix" href="https://twitter.com/Ofeeddotcom"
                            target="_blank" rel="noreferrer">
                            <div class="apsc-inner-block">
                              <span class="social-icon"><span class="apsc-fa-icon"><i
                                    class="fab fa-twitter fa-3x apsc-twitter"></i></span><span class="media-name"><span
                                    class="apsc-social-name">Twitter</span></span></span>
                              <div class="apsc-count-wrapper"><span class="apsc-media-type">follow</span></div>
                            </div>
                          </a>
                          <a class="apsc-bttn-bg" href="https://twitter.com/Ofeeddotcom" target="_blank"
                            rel="noreferrer">
                            <div class="apsc_bttn">follow</div>
                          </a>
                        </div>
                        <div class="apsc-each-profile ">
                          <a class="apsc-youtube-icon apsc-icon-soc clearfix"
                            href="https://www.youtube.com/channel/UCzroWm4bh9ygESf8TqU1-Hw?sub_confirmation=1"
                            target="_blank">
                            <div class="apsc-inner-block">
                              <span class="social-icon"><span class="apsc-fa-icon"><i
                                    class="apsc-youtube fab fa-youtube fa-3x "></i></span><span class="media-name"><span
                                    class="apsc-social-name">Youtube</span></span></span>
                              <div class="apsc-count-wrapper"><span class="apsc-media-type">subscribe</span></div>
                            </div>
                          </a>
                          <a class="apsc-bttn-bg"
                            href="https://www.youtube.com/channel/UCzroWm4bh9ygESf8TqU1-Hw?sub_confirmation=1"
                            target="_blank">
                            <div class="apsc_bttn">subscribe</div>
                          </a>
                        </div>
                        <div class="apsc-each-profile ">
                          <a class="apsc-linkedin-icon apsc-icon-soc clearfix"
                            href="https://www.linkedin.com/company/ofeed/" target="_blank" rel="noreferrer">
                            <div class="apsc-inner-block">
                              <span class="social-icon"><span class="apsc-fa-icon"><i
                                    class="apsc-linkedin fab fa-linkedin fa-3x"></i></span><span
                                  class="media-name"><span class="apsc-social-name">linkedin</span></span></span>
                              <div class="apsc-count-wrapper"><span class="apsc-media-type">follow</span></div>
                            </div>
                          </a>
                          <a class="apsc-bttn-bg" href="https://www.linkedin.com/company/ofeed/" target="_blank"
                            rel="noreferrer">
                            <div class="apsc_bttn">follow</div>
                          </a>
                        </div>
                        <div class="apsc-each-profile ">
                          <a class="apsc-vk-icon apsc-icon-soc clearfix" href="https://vk.com/id508268721"
                            target="_blank" rel="noreferrer">
                            <div class="apsc-inner-block">
                              <span class="social-icon"><span class="apsc-fa-icon"><i
                                    class="apsc-vk fab fa-vk fa-3x"></i></span><span class="media-name"><span
                                    class="apsc-social-name">linkedin</span></span></span>
                              <div class="apsc-count-wrapper"><span class="apsc-media-type">follow</span></div>
                            </div>
                          </a>
                          <a class="apsc-bttn-bg" href="https://vk.com/id508268721" target="_blank" rel="noreferrer">
                            <div class="apsc_bttn">follow</div>
                          </a>
                        </div>
                        <div class="apsc-each-profile ">
                          <a class="apsc-github-icon apsc-icon-soc clearfix" href="https://stocktwits.com/Ofeed"
                            target="_blank" rel="noreferrer">
                            <div class="apsc-inner-block">
                              <span class="social-icon"><span class="apsc-fa-icon">
                                  <svg id="New_Text_Document" xmlns="http://www.w3.org/2000/svg" width="51.817"
                                    height="33" viewBox="0 0 51.817 36.376">
                                    <g id="Group_184">
                                      <path id="Path_760"
                                        d="M20.091,28.83h5.49C26,30.955,27.287,32.1,30.138,32.1c1.7,0,2.709-.793,2.709-2.032,0-1.284-2.1-1.659-4.624-2.265-3.506-.817-7.686-2.127-7.686-6.611,0-4.393,3.853-7.431,9.321-7.431,5.934,0,8.994,2.967,9.321,7.5h-5.4c-.351-2.125-1.379-3.2-3.971-3.2-1.612,0-2.616.817-2.616,2.056,0,1.47,2.312,1.8,4.975,2.383,3.433.793,7.36,1.985,7.36,6.518,0,4.508-3.575,7.36-9.369,7.36-6.307,0-9.647-3.458-10.069-7.546Zm26.4,7.126c-3.435-.258-4.066-1.87-4.088-4.883V24.3h-1.87V20.511H42.4V17.4l6.1-2.638v5.77h2.43V24.32H48.406v6.8c0,.56.3.84.888.84H50.86v4H46.492Zm5.326-7.71c0-4.954,0,5,0,0ZM15.559,19.063,0,11.053V8.106L15.49,0l.022,5.232-9.041,4.3,9.065,4.275Z"
                                        fill="#fff"></path>
                                      <path id="Path_761"
                                        d="M15.559,17.651.071,25.779.047,20.571l8.808-4.324L.024,12.019,0,6.716l15.534,8.015Z"
                                        transform="translate(0 6.904)" fill="#fff"></path>
                                    </g>
                                  </svg>
                                </span><span class="media-name"><span
                                    class="apsc-social-name">StockTwits</span></span></span>
                              <div class="apsc-count-wrapper"><span class="apsc-media-type">follow</span></div>
                            </div>
                          </a>
                          <a class="apsc-bttn-bg" href="https://stocktwits.com/Ofeed" target="_blank" rel="noreferrer">
                            <div class="apsc_bttn">follow</div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="panel-38-1-2-4" class="so-panel widget widget_vmagazine_recent_post panel-last-child"
                  data-index="8">
                  <div class="panel-widget-style panel-widget-style-for-38-1-2-4">
                    <h4 class="block-title"><span class="title-bg">اخبار العملات</span></h4>
                    <div class="vmagazine-rec-posts recent-post-widget block_layout_1">
                      
                        @foreach($categories as $cat)
                          @if($cat->name === 'اخبار العملات')
                            @php
                              $catPosts = $cat->posts; 
                            @endphp
                            @foreach($catPosts as $catPost)
                              <div class="recent-posts-content wow fadeInUp"
                                style="visibility: visible; animation-name: fadeInUp;">
                                <div class="image-recent-post post-thumb">
                                  <a href="https://www.ofeed.com/{{$catPost['slug']}}"
                                    class="thumb-zoom">
                                    <img
                                      src="images/{{$catPost['thumbnail']}}"
                                      alt="{{$catPost['title']}} " title="{{$catPost['title']}}">
                                    <div class="image-overlay"></div>
                                  </a>
                                </div>
                                <div class="recent-post-content">
                                  <a style=" font-size: 1rem !important; "
                                    href="https://www.ofeed.com/{{$catPost['slug']}}">{{$catPost['title']}}</a>
                                </div>
                              </div>
                            @endforeach
                          @endif
                        @endforeach
                        
                      <span class="view-all"><a href="https://www.ofeed.com/Catnew?Catagory=FN">شاهد المزيد</a></span>
                    </div>
                  </div>
                </div>
                <div id="panel-38-1-2-3" class="so-panel widget widget_vmagazine_recent_post panel-last-child"
                  data-index="8">
                  <div class="panel-widget-style panel-widget-style-for-38-1-2-3">
                    <h4 class="block-title"><span class="title-bg">العملات الرقمية</span></h4>
                    <div class="vmagazine-rec-posts recent-post-widget block_layout_1">
                      
                      @php
                        $category = null;
                        $firstPost = null;
                        $catPosts = null;
                        foreach($categories as $cat) {
                          if($cat->name === 'العملات الرقمية') {
                            $category = $cat;
                            $firstPost = $category->posts[0];
                            $catPosts = $category->posts;
                          }
                        }
                      @endphp
                      @foreach($catPosts as $catPost)
                      <div class="recent-posts-content wow fadeInUp"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class="image-recent-post post-thumb">
                          <a href="https://www.ofeed.com/{{$catPost['slug']}}"
                            class="thumb-zoom">
                            <img
                              src="images/{{$catPost['thumbnail']}}"
                              alt="{{$catPost['title']}} " title="{{$catPost['title']}} ">
                            <div class="image-overlay"></div>
                          </a>
                        </div>
                        <div class="recent-post-content">
                          <a style=" font-size: 1rem !important; "
                            href="https://www.ofeed.com/{{$catPost['slug']}}">{{$catPost['title']}}</a>
                        </div>
                      </div>
                      @endforeach

                      
                      <span class="view-all"><a href="https://www.ofeed.com/Catnew?Catagory=CC">شاهد المزيد</a></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="pg-38-6" class="panel-grid panel-has-style">
            <div class=" panel-row-style-for-38-6" data-stretch-type="full-stretched">
              <div id="pgc-38-6-0" class="panel-grid-cell">
                <div id="panel-38-6-0-0"
                  class="so-panel widget widget_vmagazine_category_slider_tab vmagazine_category_slider_tab panel-first-child panel-last-child"
                  data-index="18">
                  <div class="panel-widget-style panel-widget-style-for-38-6-0-0">
                    <div class="vmagazine-slider-tab slider-tab-wrapper">
                      <div class="block-post-wrapper block_layout_1">
                        <div class="block-header clearfix">
                          <h4 class="block-title"><span class="title-bg">الفديوهات</span></h4>
                        </div>

                        <div class="block-content-wrapper">
                          <div class="block-loader" style="display: none;">
                            <div class="sampleContainer">
                              <div class="loader">
                                <span class="dot dot_1"></span>
                                <span class="dot dot_2"></span>
                                <span class="dot dot_3"></span>
                                <span class="dot dot_4"></span>
                              </div>
                            </div>
                          </div>
                          <div class="block-cat-content 3" data-slug="3">
                            <div class="tab-cat-slider sl-before-load omanymagdy slick-initialized slick-slider">
                              <div class="slick-list draggable" style="padding: 0px;">
                                <div class="slick-track"
                                  style="opacity: 1; width: 25908px; transform: translate3d(-1143px, 0px, 0px);">
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="-4"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/BGCOnshd1z4" tabindex="-1"><img
                                          src="images/sddefault.jpg"
                                          alt="في رفع الفائدة : العلم ضد التاريخ"
                                          title="في رفع الفائدة : العلم ضد التاريخ"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="-3"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/NEuqLYTSYXo" tabindex="-1"><img
                                          src="images/sddefault(1).jpg"
                                          alt="بعض من نتائج قسم التحليل الفني في موقع Ofeed"
                                          title="بعض من نتائج قسم التحليل الفني في موقع Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="-2"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/Zb4qZtBcLq4" tabindex="-1"><img
                                          src="images/sddefault(2).jpg"
                                          alt="كيف تقوم بإعداد خطة متاجرة ناجحه في سوق الفوركس ؟ - Ofeed"
                                          title="كيف تقوم بإعداد خطة متاجرة ناجحه في سوق الفوركس ؟ - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned slick-active" data-slick-index="-1"
                                    aria-hidden="false" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/ttiKrN-fzik" tabindex="0"><img
                                          src="images/sddefault(3).jpg"
                                          alt="اهم نصائح لابد ان تفعلها في البورصة والفوركس إذا اردت النجاح - Ofeed"
                                          title="اهم نصائح لابد ان تفعلها في البورصة والفوركس إذا اردت النجاح - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-current slick-active slick-center"
                                    data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/bM_G8M5copk" tabindex="0"><img
                                          src="images/sddefault(4).jpg"
                                          alt="حجم الاقتصاد غير الرسمي في مصر؟ | Ofeed"
                                          title="حجم الاقتصاد غير الرسمي في مصر؟ | Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-active" data-slick-index="1"
                                    aria-hidden="false" tabindex="0" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/SonLYyRrW9g" tabindex="0"><img
                                          src="images/sddefault(5).jpg"
                                          alt="Ofeed | بطاقات الائتمان في البنك الأهلي وأنواعها؟"
                                          title="Ofeed | بطاقات الائتمان في البنك الأهلي وأنواعها؟"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="2" aria-hidden="true"
                                    tabindex="0" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/1a5fs2IJDP0" tabindex="-1"><img
                                          src="images/sddefault(6).jpg"
                                          alt="5 أسهم مرشحة للصعود في البورصة المصرية | Ofeed"
                                          title="5 أسهم مرشحة للصعود في البورصة المصرية | Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="3" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/BTpaN9qb2ZY" tabindex="-1"><img
                                          src="images/sddefault(7).jpg"
                                          alt="Ofeed | من هو الأحمق الأكبر في البورصة ؟"
                                          title="Ofeed | من هو الأحمق الأكبر في البورصة ؟"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="4" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/eNGuHjB0Ktc" tabindex="-1"><img
                                          src="images/sddefault(8).jpg"
                                          alt="الحقيقة وراء انخفاض سعر الدولار في مصر وهل يعاود الأرتفاع"
                                          title="الحقيقة وراء انخفاض سعر الدولار في مصر وهل يعاود الأرتفاع"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="5" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/2gSuZZkchLk" tabindex="-1"><img
                                          src="images/sddefault(9).jpg"
                                          alt="بالخطوات كيفية فتح حساب في البنك الأهلي | Ofeed"
                                          title="بالخطوات كيفية فتح حساب في البنك الأهلي | Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="6" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/tizrXUR0hVM" tabindex="-1"><img
                                          src="images/sddefault(10).jpg"
                                          alt="حجم استثمارات السوريين في مصر | Ofeed"
                                          title="حجم استثمارات السوريين في مصر | Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="7" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/cSuxTExRxS0" tabindex="-1"><img
                                          src="images/sddefault(11).jpg"
                                          alt="تعرف علي كيفية حساب العلاوات الخمسة لاصحاب المعاشات | Ofeed"
                                          title="تعرف علي كيفية حساب العلاوات الخمسة لاصحاب المعاشات | Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="8" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/TAsyx9it6-E" tabindex="-1"><img
                                          src="images/sddefault(12).jpg"
                                          alt="هل ينخفض سعر الفائدة في مصر ؟ | Ofeed"
                                          title="هل ينخفض سعر الفائدة في مصر ؟ | Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="9" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/egmR6knDifk" tabindex="-1"><img
                                          src="images/sddefault(13).jpg"
                                          alt="تعرف علي ثروة مصر من الغاز الطبيعي ؟ Ofeed"
                                          title="تعرف علي ثروة مصر من الغاز الطبيعي ؟ Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="10" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/SKdE1JRkGJ4" tabindex="-1"><img
                                          src="images/sddefault(14).jpg"
                                          alt="مصر وأمم أفريقيا 2019 جدوي اقتصادية وأرباح متوقعة - Ofeed"
                                          title="مصر وأمم أفريقيا 2019 جدوي اقتصادية وأرباح متوقعة - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="11" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/5Zl9FQpRz48" tabindex="-1"><img
                                          src="images/sddefault(15).jpg"
                                          alt="Ofeed | ما هو البيع على المكشوف Short Selling"
                                          title="Ofeed | ما هو البيع على المكشوف Short Selling"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="12" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/Q1MT1-3-hck" tabindex="-1"><img
                                          src="images/sddefault(16).jpg"
                                          alt="صدمات مستثمري البورصة المصرية وحلول انعاشها مرى اخرى - Ofeed"
                                          title="صدمات مستثمري البورصة المصرية وحلول انعاشها مرى اخرى - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="13" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/uNv4JR-c83w" tabindex="-1"><img
                                          src="images/sddefault(17).jpg"
                                          alt="تعرف علي حجم أموال المعاشات وما هي الفئة المستفيدة من العلاوة؟ - Ofeed"
                                          title="تعرف علي حجم أموال المعاشات وما هي الفئة المستفيدة من العلاوة؟ - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="14" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/_v4m16SrRa8" tabindex="-1"><img
                                          src="images/sddefault(18).jpg"
                                          alt="لماذا ينخفض سعر الدولار في مصر؟ وما المتوقع الفترة القادمة - Ofeed"
                                          title="لماذا ينخفض سعر الدولار في مصر؟ وما المتوقع الفترة القادمة - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="15" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/mLHmO1yloNU" tabindex="-1"><img
                                          src="images/sddefault(19).jpg"
                                          alt="6 مبادئ هامة يعتمد عليها التحليل المالي - Ofeed"
                                          title="6 مبادئ هامة يعتمد عليها التحليل المالي - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="16" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/yqDAqEZnV8s" tabindex="-1"><img
                                          src="images/sddefault(20).jpg"
                                          alt="4 حلول للتغلب علي الأزمة العقارية - Ofeed"
                                          title="4 حلول للتغلب علي الأزمة العقارية - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="17" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/y9ZQ3s2lhq0" tabindex="-1"><img
                                          src="images/sddefault(21).jpg"
                                          alt="نظرة عامة على أداء مؤشرات البورصة المصرية - Ofeed"
                                          title="نظرة عامة على أداء مؤشرات البورصة المصرية - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="18" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/Y-LSEyMKUTU" tabindex="-1"><img
                                          src="images/sddefault(22).jpg"
                                          alt="الرؤية الفنية لأداء أبرز 5 أسهم في البورصة المصرية - Ofeed"
                                          title="الرؤية الفنية لأداء أبرز 5 أسهم في البورصة المصرية - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="19" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/3z07exnjwtA" tabindex="-1"><img
                                          src="images/sddefault(23).jpg"
                                          alt="4 مُحفزات تنعش آمال المستثمرين في البورصة المصرية - Ofeed"
                                          title="4 مُحفزات تنعش آمال المستثمرين في البورصة المصرية - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="20" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/QZ8WGWpmrtk" tabindex="-1"><img
                                          src="images/sddefault(24).jpg"
                                          alt="ما مصير سعر الفائدة في الاجتماع القادم للمركزي المصري؟ - Ofeed"
                                          title="ما مصير سعر الفائدة في الاجتماع القادم للمركزي المصري؟ - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="21" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/XEsy9p8NQHs" tabindex="-1"><img
                                          src="images/sddefault(25).jpg"
                                          alt="اهم 6 نصائح لكل من يريد الاستثمار في البورصة - Ofeed"
                                          title="اهم 6 نصائح لكل من يريد الاستثمار في البورصة - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="22" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/FOh-msZXZjo" tabindex="-1"><img
                                          src="images/sddefault(26).jpg"
                                          alt="نظرة على أداء الربع الأول وتوقعات الربع الثاني للبورصة المصرية - Ofeed"
                                          title="نظرة على أداء الربع الأول وتوقعات الربع الثاني للبورصة المصرية - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="23" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/mQQfUhmfJEY" tabindex="-1"><img
                                          src="images/sddefault(27).jpg"
                                          alt="تعرّف على سبب أكبر اقبال للاجانب في البورصة المصرية منذ 2014 - Ofeed"
                                          title="تعرّف على سبب أكبر اقبال للاجانب في البورصة المصرية منذ 2014 - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="24" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/_A7z5VDGxMg" tabindex="-1"><img
                                          src="images/sddefault(28).jpg"
                                          alt="تعرف على أهم عوامل نجاح الطروحات الحكومية في البورصة المصرية - Ofeed"
                                          title="تعرف على أهم عوامل نجاح الطروحات الحكومية في البورصة المصرية - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="25" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/Ei7YdULUOXo" tabindex="-1"><img
                                          src="images/sddefault(29).jpg"
                                          alt="إجعل صفقة رابحة تعادل 10 صفقات خاسرة (صفقة لايف) - Ofeed"
                                          title="إجعل صفقة رابحة تعادل 10 صفقات خاسرة (صفقة لايف) - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="26" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/Qe7Niin-gY4" tabindex="-1"><img
                                          src="images/sddefault(30).jpg"
                                          alt="كيفية عمل باك تيست لاستراتيجيات التداول التي تريد اختبارها - Ofeed"
                                          title="كيفية عمل باك تيست لاستراتيجيات التداول التي تريد اختبارها - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="27" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/Mqw17ZBN_Kg" tabindex="-1"><img
                                          src="images/sddefault(31).jpg"
                                          alt="الداو جونز والسوق المصري 2019" title="الداو جونز والسوق المصري 2019"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="28" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/BGCOnshd1z4" tabindex="-1"><img
                                          src="images/sddefault.jpg"
                                          alt="في رفع الفائدة : العلم ضد التاريخ"
                                          title="في رفع الفائدة : العلم ضد التاريخ"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="29" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/NEuqLYTSYXo" tabindex="-1"><img
                                          src="images/sddefault(1).jpg"
                                          alt="بعض من نتائج قسم التحليل الفني في موقع Ofeed"
                                          title="بعض من نتائج قسم التحليل الفني في موقع Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="30" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/Zb4qZtBcLq4" tabindex="-1"><img
                                          src="images/sddefault(2).jpg"
                                          alt="كيف تقوم بإعداد خطة متاجرة ناجحه في سوق الفوركس ؟ - Ofeed"
                                          title="كيف تقوم بإعداد خطة متاجرة ناجحه في سوق الفوركس ؟ - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="31" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/ttiKrN-fzik" tabindex="-1"><img
                                          src="images/sddefault(3).jpg"
                                          alt="اهم نصائح لابد ان تفعلها في البورصة والفوركس إذا اردت النجاح - Ofeed"
                                          title="اهم نصائح لابد ان تفعلها في البورصة والفوركس إذا اردت النجاح - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="32"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/bM_G8M5copk" tabindex="-1"><img
                                          src="images/sddefault(4).jpg"
                                          alt="حجم الاقتصاد غير الرسمي في مصر؟ | Ofeed"
                                          title="حجم الاقتصاد غير الرسمي في مصر؟ | Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="33"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/SonLYyRrW9g" tabindex="-1"><img
                                          src="images/sddefault(5).jpg"
                                          alt="Ofeed | بطاقات الائتمان في البنك الأهلي وأنواعها؟"
                                          title="Ofeed | بطاقات الائتمان في البنك الأهلي وأنواعها؟"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="34"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/1a5fs2IJDP0" tabindex="-1"><img
                                          src="images/sddefault(6).jpg"
                                          alt="5 أسهم مرشحة للصعود في البورصة المصرية | Ofeed"
                                          title="5 أسهم مرشحة للصعود في البورصة المصرية | Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="35"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/BTpaN9qb2ZY" tabindex="-1"><img
                                          src="images/sddefault(7).jpg"
                                          alt="Ofeed | من هو الأحمق الأكبر في البورصة ؟"
                                          title="Ofeed | من هو الأحمق الأكبر في البورصة ؟"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="36"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/eNGuHjB0Ktc" tabindex="-1"><img
                                          src="images/sddefault(8).jpg"
                                          alt="الحقيقة وراء انخفاض سعر الدولار في مصر وهل يعاود الأرتفاع"
                                          title="الحقيقة وراء انخفاض سعر الدولار في مصر وهل يعاود الأرتفاع"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="37"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/2gSuZZkchLk" tabindex="-1"><img
                                          src="images/sddefault(9).jpg"
                                          alt="بالخطوات كيفية فتح حساب في البنك الأهلي | Ofeed"
                                          title="بالخطوات كيفية فتح حساب في البنك الأهلي | Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="38"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/tizrXUR0hVM" tabindex="-1"><img
                                          src="images/sddefault(10).jpg"
                                          alt="حجم استثمارات السوريين في مصر | Ofeed"
                                          title="حجم استثمارات السوريين في مصر | Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="39"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/cSuxTExRxS0" tabindex="-1"><img
                                          src="images/sddefault(11).jpg"
                                          alt="تعرف علي كيفية حساب العلاوات الخمسة لاصحاب المعاشات | Ofeed"
                                          title="تعرف علي كيفية حساب العلاوات الخمسة لاصحاب المعاشات | Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="40"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/TAsyx9it6-E" tabindex="-1"><img
                                          src="images/sddefault(12).jpg"
                                          alt="هل ينخفض سعر الفائدة في مصر ؟ | Ofeed"
                                          title="هل ينخفض سعر الفائدة في مصر ؟ | Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="41"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/egmR6knDifk" tabindex="-1"><img
                                          src="images/sddefault(13).jpg"
                                          alt="تعرف علي ثروة مصر من الغاز الطبيعي ؟ Ofeed"
                                          title="تعرف علي ثروة مصر من الغاز الطبيعي ؟ Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="42"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/SKdE1JRkGJ4" tabindex="-1"><img
                                          src="images/sddefault(14).jpg"
                                          alt="مصر وأمم أفريقيا 2019 جدوي اقتصادية وأرباح متوقعة - Ofeed"
                                          title="مصر وأمم أفريقيا 2019 جدوي اقتصادية وأرباح متوقعة - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="43"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/5Zl9FQpRz48" tabindex="-1"><img
                                          src="images/sddefault(15).jpg"
                                          alt="Ofeed | ما هو البيع على المكشوف Short Selling"
                                          title="Ofeed | ما هو البيع على المكشوف Short Selling"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="44"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/Q1MT1-3-hck" tabindex="-1"><img
                                          src="images/sddefault(16).jpg"
                                          alt="صدمات مستثمري البورصة المصرية وحلول انعاشها مرى اخرى - Ofeed"
                                          title="صدمات مستثمري البورصة المصرية وحلول انعاشها مرى اخرى - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="45"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/uNv4JR-c83w" tabindex="-1"><img
                                          src="images/sddefault(17).jpg"
                                          alt="تعرف علي حجم أموال المعاشات وما هي الفئة المستفيدة من العلاوة؟ - Ofeed"
                                          title="تعرف علي حجم أموال المعاشات وما هي الفئة المستفيدة من العلاوة؟ - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="46"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/_v4m16SrRa8" tabindex="-1"><img
                                          src="images/sddefault(18).jpg"
                                          alt="لماذا ينخفض سعر الدولار في مصر؟ وما المتوقع الفترة القادمة - Ofeed"
                                          title="لماذا ينخفض سعر الدولار في مصر؟ وما المتوقع الفترة القادمة - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="47"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/mLHmO1yloNU" tabindex="-1"><img
                                          src="images/sddefault(19).jpg"
                                          alt="6 مبادئ هامة يعتمد عليها التحليل المالي - Ofeed"
                                          title="6 مبادئ هامة يعتمد عليها التحليل المالي - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="48"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/yqDAqEZnV8s" tabindex="-1"><img
                                          src="images/sddefault(20).jpg"
                                          alt="4 حلول للتغلب علي الأزمة العقارية - Ofeed"
                                          title="4 حلول للتغلب علي الأزمة العقارية - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="49"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/y9ZQ3s2lhq0" tabindex="-1"><img
                                          src="images/sddefault(21).jpg"
                                          alt="نظرة عامة على أداء مؤشرات البورصة المصرية - Ofeed"
                                          title="نظرة عامة على أداء مؤشرات البورصة المصرية - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="50"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/Y-LSEyMKUTU" tabindex="-1"><img
                                          src="images/sddefault(22).jpg"
                                          alt="الرؤية الفنية لأداء أبرز 5 أسهم في البورصة المصرية - Ofeed"
                                          title="الرؤية الفنية لأداء أبرز 5 أسهم في البورصة المصرية - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="51"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/3z07exnjwtA" tabindex="-1"><img
                                          src="images/sddefault(23).jpg"
                                          alt="4 مُحفزات تنعش آمال المستثمرين في البورصة المصرية - Ofeed"
                                          title="4 مُحفزات تنعش آمال المستثمرين في البورصة المصرية - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="52"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/QZ8WGWpmrtk" tabindex="-1"><img
                                          src="images/sddefault(24).jpg"
                                          alt="ما مصير سعر الفائدة في الاجتماع القادم للمركزي المصري؟ - Ofeed"
                                          title="ما مصير سعر الفائدة في الاجتماع القادم للمركزي المصري؟ - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="53"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/XEsy9p8NQHs" tabindex="-1"><img
                                          src="images/sddefault(25).jpg"
                                          alt="اهم 6 نصائح لكل من يريد الاستثمار في البورصة - Ofeed"
                                          title="اهم 6 نصائح لكل من يريد الاستثمار في البورصة - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="54"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/FOh-msZXZjo" tabindex="-1"><img
                                          src="images/sddefault(26).jpg"
                                          alt="نظرة على أداء الربع الأول وتوقعات الربع الثاني للبورصة المصرية - Ofeed"
                                          title="نظرة على أداء الربع الأول وتوقعات الربع الثاني للبورصة المصرية - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="55"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/mQQfUhmfJEY" tabindex="-1"><img
                                          src="images/sddefault(27).jpg"
                                          alt="تعرّف على سبب أكبر اقبال للاجانب في البورصة المصرية منذ 2014 - Ofeed"
                                          title="تعرّف على سبب أكبر اقبال للاجانب في البورصة المصرية منذ 2014 - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="56"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/_A7z5VDGxMg" tabindex="-1"><img
                                          src="images/sddefault(28).jpg"
                                          alt="تعرف على أهم عوامل نجاح الطروحات الحكومية في البورصة المصرية - Ofeed"
                                          title="تعرف على أهم عوامل نجاح الطروحات الحكومية في البورصة المصرية - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="57"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/Ei7YdULUOXo" tabindex="-1"><img
                                          src="images/sddefault(29).jpg"
                                          alt="إجعل صفقة رابحة تعادل 10 صفقات خاسرة (صفقة لايف) - Ofeed"
                                          title="إجعل صفقة رابحة تعادل 10 صفقات خاسرة (صفقة لايف) - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="58"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/Qe7Niin-gY4" tabindex="-1"><img
                                          src="images/sddefault(30).jpg"
                                          alt="كيفية عمل باك تيست لاستراتيجيات التداول التي تريد اختبارها - Ofeed"
                                          title="كيفية عمل باك تيست لاستراتيجيات التداول التي تريد اختبارها - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="59"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/Mqw17ZBN_Kg" tabindex="-1"><img
                                          src="images/sddefault(31).jpg"
                                          alt="الداو جونز والسوق المصري 2019" title="الداو جونز والسوق المصري 2019"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned slick-center" data-slick-index="60"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/BGCOnshd1z4" tabindex="-1"><img
                                          src="images/sddefault.jpg"
                                          alt="في رفع الفائدة : العلم ضد التاريخ"
                                          title="في رفع الفائدة : العلم ضد التاريخ"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="61"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/NEuqLYTSYXo" tabindex="-1"><img
                                          src="images/sddefault(1).jpg"
                                          alt="بعض من نتائج قسم التحليل الفني في موقع Ofeed"
                                          title="بعض من نتائج قسم التحليل الفني في موقع Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="62"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/Zb4qZtBcLq4" tabindex="-1"><img
                                          src="images/sddefault(2).jpg"
                                          alt="كيف تقوم بإعداد خطة متاجرة ناجحه في سوق الفوركس ؟ - Ofeed"
                                          title="كيف تقوم بإعداد خطة متاجرة ناجحه في سوق الفوركس ؟ - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="63"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/ttiKrN-fzik" tabindex="-1"><img
                                          src="images/sddefault(3).jpg"
                                          alt="اهم نصائح لابد ان تفعلها في البورصة والفوركس إذا اردت النجاح - Ofeed"
                                          title="اهم نصائح لابد ان تفعلها في البورصة والفوركس إذا اردت النجاح - Ofeed"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="pg-38-2" class="panel-grid panel-has-style" style="direction: rtl;">
            <div class="panel-row-style panel-row-style-for-38-2">
              <div id="pgc-38-2-0" class="panel-grid-cell">
                <div id="panel-38-2-0-0"
                  class="so-panel widget widget_vmagazine_block_posts_ajax vmagazine_block_posts_ajax panel-first-child panel-last-child"
                  data-index="9">
                  <div class="panel-widget-style panel-widget-style-for-38-2-0-0">
                    <div class="vmagazine-mul-cat block-post-wrapper layout-two clearfix">
                      <div class="block-header clearfix">
                        <h4 class="block-title"><span class="title-bg">الاسواق العربية</span></h4>
                        <div class="child-cat-tabs">
                          <ul class="vmagazine-tab-links">
                            <li class="active">
                              <a href="javascript:void(0)" data-meta="show" data-id="1" data-slug="1" data-link="SS"
                                data-layout="block_layout_2" data-count="6" data-length="0" data-btn="شاهد المزيد"
                                rel="noreferrer">السوق السعودي</a>
                            </li>
                            <li>
                              <a href="javascript:void(0)" data-meta="show" data-id="2" data-slug="2" data-link="ES"
                                data-layout="block_layout_2" data-count="6" data-length="0" data-btn="شاهد المزيد"
                                rel="noreferrer">السوق المصري</a>
                            </li>
                          </ul>
                        </div>
                      </div>

                      <div class="block-content-wrapper">
                        <div class="block-loader" style="display: none;">
                          <div class="sampleContainer">
                            <div class="loader">
                              <span class="dot dot_1"></span>
                              <span class="dot dot_2"></span>
                              <span class="dot dot_3"></span>
                              <span class="dot dot_4"></span>
                            </div>
                          </div>
                        </div>
                        <div class="block-cat-content 1">
                          <div class="left-post-wrapper wow fadeInDown" data-wow-duration="0.7s"
                            style="visibility: visible; animation-duration: 0.7s; animation-name: fadeInDown;">
                            <div class="single-post clearfix">
                              <div class="post-thumb">
                                <a class="thumb-zoom"
                                  href="https://www.ofeed.com/%D8%A7%D9%84%D8%B3%D9%88%D9%82%20%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A/%D8%A7%D9%84%D8%AF%D8%B1%D9%8A%D8%B3-%D9%8A%D8%AD%D9%82%D9%82-%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81%D9%86%D8%A7-%D8%A7%D9%84%D8%A3%D9%88%D9%84-%D9%88%D9%8A%D9%82%D8%AA%D8%B1%D8%A8-%D9%85%D9%86-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81-%D8%A7%D9%84%D8%AB%D8%A7%D9%86%D9%8A-%D9%88%D8%A7%D9%84%D8%A7%D9%86-%D9%86%D9%86%D8%B5%D8%AD-%D8%A8%D8%A7%D9%84%D8%A7%D8%AA%D9%8A-"
                                  title="شركة الدريس للخدمات البترولية والنقليات " الدريس""="">
                                  <img
                                    src="images/940d914c-5e88-4781-bece-d78fe72f142e.jpg"
                                    alt="شركة الدريس للخدمات البترولية والنقليات " الدريس""=""
                                    title="شركة الدريس للخدمات البترولية والنقليات ">
                                  <div class="image-overlay"></div>
                                </a>
                                <span class="post-format-icon video-icon "><i class="icon_film"></i></span>
                              </div>

                              <div class="post-caption-wrapper">
                                <div class="post-caption-inner">
                                  <div class="post-meta clearfix">
                                    <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                    <span class="post-view"><i class="fa fa-eye"></i>25</span>
                                    <span class="posted-on"><i class="fa fa-clock-o"></i>2020-06-23</span>
                                  </div>
                                  <h2 class="small-font">
                                    <a
                                      href="https://www.ofeed.com/%D8%A7%D9%84%D8%B3%D9%88%D9%82%20%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A/%D8%A7%D9%84%D8%AF%D8%B1%D9%8A%D8%B3-%D9%8A%D8%AD%D9%82%D9%82-%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81%D9%86%D8%A7-%D8%A7%D9%84%D8%A3%D9%88%D9%84-%D9%88%D9%8A%D9%82%D8%AA%D8%B1%D8%A8-%D9%85%D9%86-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81-%D8%A7%D9%84%D8%AB%D8%A7%D9%86%D9%8A-%D9%88%D8%A7%D9%84%D8%A7%D9%86-%D9%86%D9%86%D8%B5%D8%AD-%D8%A8%D8%A7%D9%84%D8%A7%D8%AA%D9%8A-">الدريس
                                      يحقق مستهدفنا الأول ويقترب من المستهدف الثاني والان ننصح بالاتي </a>
                                  </h2>
                                </div>
                              </div>

                            </div>

                          </div>
                          <div class="right-posts-wrapper wow fadeInUp" data-wow-duration="0.7s"
                            style="visibility: visible; animation-duration: 0.7s; animation-name: fadeInUp;">
                            <div class="single-post clearfix">
                              <div class="post-thumb">
                                <a class="thumb-zoom"
                                  href="https://www.ofeed.com/%D8%A7%D9%84%D8%B3%D9%88%D9%82%20%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A/%D9%87%D9%84-%D9%8A%D8%B3%D8%A7%D8%B9%D8%AF-%D8%B1%D9%81%D8%B9-%D8%A7%D9%84%D8%AD%D8%B8%D8%B1-%D9%88%D8%A7%D8%B9%D8%A7%D8%AF%D8%A9-%D8%A7%D9%84%D9%81%D8%AA%D8%AD-%D8%B3%D9%87%D9%85-%D8%A7%D9%84%D8%AD%D9%83%D9%8A%D8%B1-%D9%81%D9%8A-%D8%A7%D8%AE%D8%AA%D8%B1%D8%A7%D9%82-%D9%85%D9%82%D8%A7%D9%88%D9%85%D8%A9-19.20-%D8%B1%D9%8A%D8%A7%D9%84-"
                                  title="شركة فواز عبد العزيز الحكير وشركاه">
                                  <img
                                    src="images/9364fd2f-2adf-4394-acbd-11933a55e24d.jpg"
                                    alt="شركة فواز عبد العزيز الحكير وشركاه" title="شركة فواز عبد العزيز الحكير وشركاه">
                                  <div class="image-overlay"></div>
                                </a>
                              </div>

                              <div class="post-caption-wrapper">
                                <div class="post-caption-inner">
                                  <div class="post-meta clearfix">
                                    <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                    <span class="post-view"><i class="fa fa-eye"></i>50</span>
                                    <span class="posted-on"><i class="fa fa-clock-o"></i>2020-06-21</span>
                                  </div>
                                  <h2 class="small-font">
                                    <a
                                      href="https://www.ofeed.com/%D8%A7%D9%84%D8%B3%D9%88%D9%82%20%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A/%D9%87%D9%84-%D9%8A%D8%B3%D8%A7%D8%B9%D8%AF-%D8%B1%D9%81%D8%B9-%D8%A7%D9%84%D8%AD%D8%B8%D8%B1-%D9%88%D8%A7%D8%B9%D8%A7%D8%AF%D8%A9-%D8%A7%D9%84%D9%81%D8%AA%D8%AD-%D8%B3%D9%87%D9%85-%D8%A7%D9%84%D8%AD%D9%83%D9%8A%D8%B1-%D9%81%D9%8A-%D8%A7%D8%AE%D8%AA%D8%B1%D8%A7%D9%82-%D9%85%D9%82%D8%A7%D9%88%D9%85%D8%A9-19.20-%D8%B1%D9%8A%D8%A7%D9%84-">هل
                                      يساعد رفع الحظر واعادة الفتح سهم الحكير في اختراق مقاومة 19.20 ريال </a>
                                  </h2>
                                </div>
                              </div>

                            </div>

                            <div class="single-post clearfix">
                              <div class="post-thumb">
                                <a class="thumb-zoom"
                                  href="https://www.ofeed.com/%D8%A7%D9%84%D8%B3%D9%88%D9%82%20%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A/%D8%B3%D9%8A%D8%B1%D8%A7-%D8%AA%D8%AD%D9%82%D9%82-%D9%86%D8%AA%D8%A7%D8%A6%D8%AC-%D8%A3%D8%B9%D9%85%D8%A7%D9%84-%D8%A7%D8%B3%D8%AA%D8%AB%D9%86%D8%A7%D8%A6%D9%8A%D8%A9-%D8%AC%D8%AF%D8%A7-%D8%A8%D8%AF%D8%B9%D9%85-%D9%85%D9%86-%D8%B5%D9%81%D9%82%D8%A9-%D8%A3%D9%88%D8%A8%D8%B1-%D9%88%D9%83%D8%B1%D9%8A%D9%85-%D9%88%D8%A7%D9%84%D8%B3%D9%87%D9%85-%D9%8A%D9%83%D9%88%D9%86-%D9%86%D9%85%D9%88%D8%B0%D8%AC-%D8%A5%D9%8A%D8%AC%D8%A7%D8%A8%D9%8A-"
                                  title="مجموعة سيرا القابضة (الطيار للسفر - سابقاً)">
                                  <img
                                    src="images/f97e3e7e-811f-460e-80a5-d6eff8cef4fc.jpeg"
                                    alt="مجموعة سيرا القابضة (الطيار للسفر - سابقاً)"
                                    title="مجموعة سيرا القابضة (الطيار للسفر - سابقاً)">
                                  <div class="image-overlay"></div>
                                </a>
                              </div>

                              <div class="post-caption-wrapper">
                                <div class="post-caption-inner">
                                  <div class="post-meta clearfix">
                                    <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                    <span class="post-view"><i class="fa fa-eye"></i>55</span>
                                    <span class="posted-on"><i class="fa fa-clock-o"></i>2020-06-18</span>
                                  </div>
                                  <h2 class="small-font">
                                    <a
                                      href="https://www.ofeed.com/%D8%A7%D9%84%D8%B3%D9%88%D9%82%20%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A/%D8%B3%D9%8A%D8%B1%D8%A7-%D8%AA%D8%AD%D9%82%D9%82-%D9%86%D8%AA%D8%A7%D8%A6%D8%AC-%D8%A3%D8%B9%D9%85%D8%A7%D9%84-%D8%A7%D8%B3%D8%AA%D8%AB%D9%86%D8%A7%D8%A6%D9%8A%D8%A9-%D8%AC%D8%AF%D8%A7-%D8%A8%D8%AF%D8%B9%D9%85-%D9%85%D9%86-%D8%B5%D9%81%D9%82%D8%A9-%D8%A3%D9%88%D8%A8%D8%B1-%D9%88%D9%83%D8%B1%D9%8A%D9%85-%D9%88%D8%A7%D9%84%D8%B3%D9%87%D9%85-%D9%8A%D9%83%D9%88%D9%86-%D9%86%D9%85%D9%88%D8%B0%D8%AC-%D8%A5%D9%8A%D8%AC%D8%A7%D8%A8%D9%8A-">سيرا
                                      تحقق نتائج أعمال استثنائية جدا بدعم من صفقة أوبر وكريم والسهم يكون نموذج إيجابي
                                    </a>
                                  </h2>
                                </div>
                              </div>

                            </div>

                            <div class="single-post clearfix">
                              <div class="post-thumb">
                                <a class="thumb-zoom"
                                  href="https://www.ofeed.com/%D8%A7%D9%84%D8%B3%D9%88%D9%82%20%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A/%D8%A8%D8%AF%D8%AC%D8%AA-%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D8%A9-%D8%AA%D8%B3%D8%AA%D9%87%D8%AF%D9%81-35-%D8%B1%D9%8A%D8%A7%D9%84-%D9%88%D9%84%D9%83%D9%86-%D8%A8%D8%B4%D8%B1%D8%B7"
                                  title="الشركة المتحدة الدولية للمواصلات (بدجت السعودية)">
                                  <img
                                    src="images/7b8dcccf-7bc3-4758-828c-fbb576e98b64.jpg"
                                    alt="الشركة المتحدة الدولية للمواصلات (بدجت السعودية)"
                                    title="الشركة المتحدة الدولية للمواصلات (بدجت السعودية)">
                                  <div class="image-overlay"></div>
                                </a>
                              </div>

                              <div class="post-caption-wrapper">
                                <div class="post-caption-inner">
                                  <div class="post-meta clearfix">
                                    <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                    <span class="post-view"><i class="fa fa-eye"></i>63</span>
                                    <span class="posted-on"><i class="fa fa-clock-o"></i>2020-06-16</span>
                                  </div>
                                  <h2 class="small-font">
                                    <a
                                      href="https://www.ofeed.com/%D8%A7%D9%84%D8%B3%D9%88%D9%82%20%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A/%D8%A8%D8%AF%D8%AC%D8%AA-%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D8%A9-%D8%AA%D8%B3%D8%AA%D9%87%D8%AF%D9%81-35-%D8%B1%D9%8A%D8%A7%D9%84-%D9%88%D9%84%D9%83%D9%86-%D8%A8%D8%B4%D8%B1%D8%B7">بدجت
                                      السعودية تستهدف 35 ريال ولكن بشرط !!</a>
                                  </h2>
                                </div>
                              </div>

                            </div>

                            <div class="single-post clearfix">
                              <div class="post-thumb">
                                <a class="thumb-zoom"
                                  href="https://www.ofeed.com/%D8%A7%D9%84%D8%B3%D9%88%D9%82%20%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A/%D8%A3%D9%85%D9%8A%D8%A7%D9%86%D9%8A%D8%AA-%D8%AA%D8%AE%D8%AA%D8%A8%D8%B1-%D9%85%D9%82%D8%A7%D9%88%D9%85%D8%A9-%D8%A7%D9%84%D8%A7%D8%AA%D8%AC%D8%A7%D9%87-%D8%A7%D9%84%D8%B9%D8%B1%D8%B6%D9%8A-%D8%A8%D8%AF%D8%B9%D9%85-%D9%85%D9%86-%D8%AA%D9%88%D8%B5%D9%8A%D8%A9-%D8%AE%D9%81%D8%B6-%D8%B1%D8%A3%D8%B3-%D9%85%D8%A7%D9%84-%D8%A7%D9%84%D8%B4%D8%B1%D9%83%D8%A9-"
                                  title="شركة أميانتيت العربية السعودية " أميانتيت""="">
                                  <img
                                    src="images/2430cd77-5915-487d-b0e7-0be6b6d2638d.jpg"
                                    alt="شركة أميانتيت العربية السعودية " أميانتيت""=""
                                    title="شركة أميانتيت العربية السعودية ">
                                  <div class="image-overlay"></div>
                                </a>
                              </div>

                              <div class="post-caption-wrapper">
                                <div class="post-caption-inner">
                                  <div class="post-meta clearfix">
                                    <span class="comments"><i class="far fa-thumbs-up"></i>1</span>
                                    <span class="post-view"><i class="fa fa-eye"></i>70</span>
                                    <span class="posted-on"><i class="fa fa-clock-o"></i>2020-06-14</span>
                                  </div>
                                  <h2 class="small-font">
                                    <a
                                      href="https://www.ofeed.com/%D8%A7%D9%84%D8%B3%D9%88%D9%82%20%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A/%D8%A3%D9%85%D9%8A%D8%A7%D9%86%D9%8A%D8%AA-%D8%AA%D8%AE%D8%AA%D8%A8%D8%B1-%D9%85%D9%82%D8%A7%D9%88%D9%85%D8%A9-%D8%A7%D9%84%D8%A7%D8%AA%D8%AC%D8%A7%D9%87-%D8%A7%D9%84%D8%B9%D8%B1%D8%B6%D9%8A-%D8%A8%D8%AF%D8%B9%D9%85-%D9%85%D9%86-%D8%AA%D9%88%D8%B5%D9%8A%D8%A9-%D8%AE%D9%81%D8%B6-%D8%B1%D8%A3%D8%B3-%D9%85%D8%A7%D9%84-%D8%A7%D9%84%D8%B4%D8%B1%D9%83%D8%A9-">أميانيت
                                      تختبر مقاومة الاتجاه العرضي بدعم من توصية خفض رأس مال الشركة </a>
                                  </h2>
                                </div>
                              </div>

                            </div>

                            <span class="view-all"><a href="https://www.ofeed.com/Catnew?Catagory=SS">شاهد
                                المزيد</a></span>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div id="pgc-38-2-1" class="panel-grid-cell">
                <div id="panel-38-2-1-0"
                  class="so-panel widget widget_vmagazine_medium_ad vmagazine_medium_ad panel-first-child panel-last-child"
                  data-index="10">
                  <div class="panel-widget-style panel-widget-style-for-38-2-1-0">
                    <div class="vmagazine-medium-rectangle-ad medium-rectangle-wrapper">
                      <a href="https://www.ofeed.com/price_plansar" target="_blank">
                        <img src="images/5a.png" alt="Home" title="Home"
                          style="height: 600px;">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="pg-38-4" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-38-4">
              <div id="pgc-38-4-0" class="panel-grid-cell">
                <div id="panel-38-4-0-0"
                  class="so-panel widget widget_vmagazine_block_grid_list vmagazine_block_grid_list panel-first-child panel-last-child"
                  data-index="12">
                  <div class="panel-widget-style panel-widget-style-for-38-4-0-0">
                    <div class="vmagazine-grid-list-wrapp grid no-desc">
                      <div class="block-header clearfix">
                        <h4 class="block-title"><span class="title-bg">انفوجرافيك</span></h4>
                      </div>

                      <div class="vmagazine-grid-list block-post-wrapper grid">
                        <div class="posts-wrap">
                          <div class="single-post first-post clearfix wow fadeInUp" data-wow-duration="0.7s"
                            style="visibility: visible; animation-duration: 0.7s; animation-name: fadeInUp;">
                            <div class="post-thumb">
                              <a class="thumb-zoom"
                                href="https://www.ofeed.com/%D8%A7%D9%86%D9%81%D9%88%D8%AC%D8%B1%D8%A7%D9%81%D9%8A%D9%83/%D8%A5%D9%86%D9%81%D9%88%D8%AC%D8%B1%D8%A7%D9%81%D9%8A%D9%83-%D8%AA%D8%A8%D8%A7%D9%8A%D9%86-%D8%A7%D9%86%D8%AA%D8%B4%D8%A7%D8%B1-%D9%81%D9%8A%D8%B1%D9%88%D8%B3-%D9%83%D9%88%D8%B1%D9%88%D9%86%D8%A7-%D8%A8%D9%8A%D9%86-%D9%82%D8%A7%D8%B1%D8%A7%D8%AA-%D8%A7%D9%84%D8%B9%D8%A7%D9%84%D9%85"
                                title="فيروس كورونا ">
                                <img
                                  src="images/ac0efe77-f14e-4c8a-95b6-99d1f051f2fc.png"
                                  alt="فيروس كورونا " title="فيروس كورونا ">
                                <div class="image-overlay"></div>
                              </a>
                            </div>

                            <div class="post-content-wrapper clearfix">
                              <div class="post-meta clearfix">
                                <span class="posted-on"><i class="far fa-clock"></i>3 weeks ago</span>
                                <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                <span class="post-view"><i class="fa fa-eye"></i>102</span>
                              </div>

                              <h2 class="large-font">
                                <a
                                  href="https://www.ofeed.com/%D8%A7%D9%86%D9%81%D9%88%D8%AC%D8%B1%D8%A7%D9%81%D9%8A%D9%83/%D8%A5%D9%86%D9%81%D9%88%D8%AC%D8%B1%D8%A7%D9%81%D9%8A%D9%83-%D8%AA%D8%A8%D8%A7%D9%8A%D9%86-%D8%A7%D9%86%D8%AA%D8%B4%D8%A7%D8%B1-%D9%81%D9%8A%D8%B1%D9%88%D8%B3-%D9%83%D9%88%D8%B1%D9%88%D9%86%D8%A7-%D8%A8%D9%8A%D9%86-%D9%82%D8%A7%D8%B1%D8%A7%D8%AA-%D8%A7%D9%84%D8%B9%D8%A7%D9%84%D9%85">إنفوجرافيك:
                                  تباين انتشار فيروس كورونا بين قارات العالم</a>
                              </h2>
                            </div>

                          </div>

                          <div class="single-post  clearfix wow fadeInUp" data-wow-duration="0.7s"
                            style="visibility: visible; animation-duration: 0.7s; animation-name: fadeInUp;">
                            <div class="post-thumb">
                              <a class="thumb-zoom"
                                href="https://www.ofeed.com/%D8%A7%D9%86%D9%81%D9%88%D8%AC%D8%B1%D8%A7%D9%81%D9%8A%D9%83/%D8%A5%D9%86%D9%81%D9%88%D8%AC%D8%B1%D8%A7%D9%81%D9%8A%D9%83-%D8%AA%D8%A3%D8%AB%D9%8A%D8%B1-%D9%81%D9%8A%D8%B1%D9%88%D8%B3-%D9%83%D9%88%D8%B1%D9%88%D9%86%D8%A7-%D8%B9%D9%84%D9%89-%D8%A7%D9%84%D8%B3%D9%8A%D8%A7%D8%AD%D8%A9"
                                title="إنفوجرافيك كورونا السياحة ">
                                <img
                                  src="images/83881c27-7b34-499c-b623-615a4296727b.jpg"
                                  alt="إنفوجرافيك كورونا السياحة " title="إنفوجرافيك كورونا السياحة ">
                                <div class="image-overlay"></div>
                              </a>
                            </div>

                            <div class="post-content-wrapper clearfix">
                              <div class="post-meta clearfix">
                                <span class="posted-on"><i class="far fa-clock"></i>last month</span>
                                <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                <span class="post-view"><i class="fa fa-eye"></i>54</span>
                              </div>

                              <h2 class="large-font">
                                <a
                                  href="https://www.ofeed.com/%D8%A7%D9%86%D9%81%D9%88%D8%AC%D8%B1%D8%A7%D9%81%D9%8A%D9%83/%D8%A5%D9%86%D9%81%D9%88%D8%AC%D8%B1%D8%A7%D9%81%D9%8A%D9%83-%D8%AA%D8%A3%D8%AB%D9%8A%D8%B1-%D9%81%D9%8A%D8%B1%D9%88%D8%B3-%D9%83%D9%88%D8%B1%D9%88%D9%86%D8%A7-%D8%B9%D9%84%D9%89-%D8%A7%D9%84%D8%B3%D9%8A%D8%A7%D8%AD%D8%A9">إنفوجرافيك:
                                  تأثير فيروس كورونا على السياحة؟</a>
                              </h2>
                            </div>

                          </div>

                          <div class="single-post  clearfix wow fadeInUp" data-wow-duration="0.7s"
                            style="visibility: visible; animation-duration: 0.7s; animation-name: fadeInUp;">
                            <div class="post-thumb">
                              <a class="thumb-zoom"
                                href="https://www.ofeed.com/%D8%A7%D9%86%D9%81%D9%88%D8%AC%D8%B1%D8%A7%D9%81%D9%8A%D9%83/%D8%A5%D9%86%D9%81%D9%88%D8%AC%D8%B1%D8%A7%D9%81%D9%8A%D9%83-%D9%87%D9%84-%D9%8A%D8%AC%D8%A8-%D8%A5%D8%B9%D8%A7%D8%AF%D8%A9-%D9%81%D8%AA%D8%AD-%D8%A7%D9%84%D8%A7%D9%82%D8%AA%D8%B5%D8%A7%D8%AF-%D8%A7%D9%84%D8%A2%D9%86"
                                title="إنفوجرافيك فتح الاقتصاد ">
                                <img
                                  src="images/a7eed7f6-1da3-4529-ad9c-a3a4dcfe0c66.jpeg"
                                  alt="إنفوجرافيك فتح الاقتصاد " title="إنفوجرافيك فتح الاقتصاد ">
                                <div class="image-overlay"></div>
                              </a>
                            </div>

                            <div class="post-content-wrapper clearfix">
                              <div class="post-meta clearfix">
                                <span class="posted-on"><i class="far fa-clock"></i>last month</span>
                                <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                <span class="post-view"><i class="fa fa-eye"></i>102</span>
                              </div>

                              <h2 class="large-font">
                                <a
                                  href="https://www.ofeed.com/%D8%A7%D9%86%D9%81%D9%88%D8%AC%D8%B1%D8%A7%D9%81%D9%8A%D9%83/%D8%A5%D9%86%D9%81%D9%88%D8%AC%D8%B1%D8%A7%D9%81%D9%8A%D9%83-%D9%87%D9%84-%D9%8A%D8%AC%D8%A8-%D8%A5%D8%B9%D8%A7%D8%AF%D8%A9-%D9%81%D8%AA%D8%AD-%D8%A7%D9%84%D8%A7%D9%82%D8%AA%D8%B5%D8%A7%D8%AF-%D8%A7%D9%84%D8%A2%D9%86">إنفوجرافيك:
                                  هل يجب إعادة فتح الاقتصاد الآن؟</a>
                              </h2>
                            </div>

                          </div>

                        </div>
                        <span class="view-all"><a href="https://www.ofeed.com/Catnew?Catagory=FC">شاهد المزيد</a></span>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div id="pgc-38-4-1" class="panel-grid-cell">
                <div id="panel-38-4-1-0"
                  class="so-panel widget widget_vmagazine_block_grid_list vmagazine_block_grid_list panel-first-child panel-last-child"
                  data-index="13">
                  <div class="panel-widget-style panel-widget-style-for-38-4-1-0">
                    <div class="vmagazine-grid-list-wrapp grid no-desc">
                      <div class="block-header clearfix">
                        <h4 class="block-title"><span class="title-bg">جراف العملات</span></h4>
                      </div>

                      <div class="vmagazine-grid-list block-post-wrapper grid">
                        <div class="posts-wrap">
                          <div class="single-post first-post clearfix wow fadeInUp" data-wow-duration="0.7s"
                            style="visibility: visible; animation-duration: 0.7s; animation-name: fadeInUp;">
                            <div class="post-thumb">
                              <a class="thumb-zoom"
                                href="https://www.ofeed.com/%D8%AC%D8%B1%D8%A7%D9%81%20%D8%A7%D9%84%D8%B9%D9%85%D9%84%D8%A7%D8%AA/%D8%A7%D9%84%D9%82%D8%B7%D8%A7%D8%B9-%D8%A7%D9%84%D8%B5%D9%86%D8%A7%D8%B9%D9%8A-%D9%81%D9%8A-%D8%A8%D8%B1%D9%8A%D8%B7%D8%A7%D9%86%D9%8A%D8%A7-%D9%8A%D8%B9%D9%88%D8%AF-%D8%A5%D9%84%D9%89-%D8%A7%D9%84%D9%86%D9%85%D9%88"
                                title="القطاع الصناعي بريطانيا ">
                                <img
                                  src="images/4d8f7f02-d77d-4cc0-aab1-5517f709899a.jpg"
                                  alt="القطاع الصناعي بريطانيا " title="القطاع الصناعي بريطانيا ">
                                <div class="image-overlay"></div>
                              </a>
                            </div>

                            <div class="post-content-wrapper clearfix">
                              <div class="post-meta clearfix">
                                <span class="posted-on"><i class="far fa-clock"></i>4 hours ago</span>
                                <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                <span class="post-view"><i class="fa fa-eye"></i>39</span>
                              </div>

                              <h2 class="large-font">
                                <a
                                  href="https://www.ofeed.com/%D8%AC%D8%B1%D8%A7%D9%81%20%D8%A7%D9%84%D8%B9%D9%85%D9%84%D8%A7%D8%AA/%D8%A7%D9%84%D9%82%D8%B7%D8%A7%D8%B9-%D8%A7%D9%84%D8%B5%D9%86%D8%A7%D8%B9%D9%8A-%D9%81%D9%8A-%D8%A8%D8%B1%D9%8A%D8%B7%D8%A7%D9%86%D9%8A%D8%A7-%D9%8A%D8%B9%D9%88%D8%AF-%D8%A5%D9%84%D9%89-%D8%A7%D9%84%D9%86%D9%85%D9%88">القطاع
                                  الصناعي في بريطانيا يعود إلى النمو</a>
                              </h2>
                            </div>

                          </div>

                          <div class="single-post  clearfix wow fadeInUp" data-wow-duration="0.7s"
                            style="visibility: visible; animation-duration: 0.7s; animation-name: fadeInUp;">
                            <div class="post-thumb">
                              <a class="thumb-zoom"
                                href="https://www.ofeed.com/%D8%AC%D8%B1%D8%A7%D9%81%20%D8%A7%D9%84%D8%B9%D9%85%D9%84%D8%A7%D8%AA/%D8%A7%D8%B1%D8%AA%D9%81%D8%A7%D8%B9-%D9%85%D8%A4%D8%B4%D8%B1-%D8%B3%D8%AA%D8%A7%D9%86%D8%AF%D8%B1%D8%AF-%D8%A2%D9%86%D8%AF-%D8%A8%D9%88%D8%B1%D8%B2-%D8%A3%D8%B8%D9%87%D8%B1-%D8%B9%D9%84%D8%A7%D9%82%D8%A9-%D8%B9%D9%83%D8%B3%D9%8A%D8%A9-%D9%85%D8%B9-%D8%A7%D9%84%D8%AF%D9%88%D9%84%D8%A7%D8%B1"
                                title="علاقة عكسية الدولار">
                                <img
                                  src="images/9d369840-fa94-44e4-9b8a-824aff488e0f.jpg"
                                  alt="علاقة عكسية الدولار" title="علاقة عكسية الدولار">
                                <div class="image-overlay"></div>
                              </a>
                            </div>

                            <div class="post-content-wrapper clearfix">
                              <div class="post-meta clearfix">
                                <span class="posted-on"><i class="far fa-clock"></i>4 days ago</span>
                                <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                <span class="post-view"><i class="fa fa-eye"></i>53</span>
                              </div>

                              <h2 class="large-font">
                                <a
                                  href="https://www.ofeed.com/%D8%AC%D8%B1%D8%A7%D9%81%20%D8%A7%D9%84%D8%B9%D9%85%D9%84%D8%A7%D8%AA/%D8%A7%D8%B1%D8%AA%D9%81%D8%A7%D8%B9-%D9%85%D8%A4%D8%B4%D8%B1-%D8%B3%D8%AA%D8%A7%D9%86%D8%AF%D8%B1%D8%AF-%D8%A2%D9%86%D8%AF-%D8%A8%D9%88%D8%B1%D8%B2-%D8%A3%D8%B8%D9%87%D8%B1-%D8%B9%D9%84%D8%A7%D9%82%D8%A9-%D8%B9%D9%83%D8%B3%D9%8A%D8%A9-%D9%85%D8%B9-%D8%A7%D9%84%D8%AF%D9%88%D9%84%D8%A7%D8%B1">ارتفاع
                                  مؤشر ستاندرد آند بورز أظهر علاقة عكسية مع الدولار</a>
                              </h2>
                            </div>

                          </div>

                          <div class="single-post  clearfix wow fadeInUp" data-wow-duration="0.7s"
                            style="visibility: visible; animation-duration: 0.7s; animation-name: fadeInUp;">
                            <div class="post-thumb">
                              <a class="thumb-zoom"
                                href="https://www.ofeed.com/%D8%AC%D8%B1%D8%A7%D9%81%20%D8%A7%D9%84%D8%B9%D9%85%D9%84%D8%A7%D8%AA/%D8%A7%D9%84%D8%A7%D9%82%D8%AA%D8%B5%D8%A7%D8%AF-%D8%A7%D9%84%D9%8A%D9%88%D9%86%D8%A7%D9%86%D9%8A-%D9%8A%D9%86%D9%83%D9%85%D8%B4-%D8%AE%D9%84%D8%A7%D9%84-%D8%A7%D9%84%D8%B1%D8%A8%D8%B9-%D8%A7%D9%84%D8%A3%D9%88%D9%84-%D9%85%D9%86-%D8%A7%D9%84%D8%B9%D8%A7%D9%85-%D8%A8%D8%B3%D8%A8%D8%A8-%D8%A7%D9%84%D9%83%D9%88%D8%B1%D9%88%D9%86%D8%A7"
                                title="الاقتصاد اليوناني ">
                                <img
                                  src="images/3be52b33-0dbe-4c3e-ae61-54eb2d1061d4.jpg"
                                  alt="الاقتصاد اليوناني " title="الاقتصاد اليوناني ">
                                <div class="image-overlay"></div>
                              </a>
                            </div>

                            <div class="post-content-wrapper clearfix">
                              <div class="post-meta clearfix">
                                <span class="posted-on"><i class="far fa-clock"></i>2 weeks ago</span>
                                <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                <span class="post-view"><i class="fa fa-eye"></i>99</span>
                              </div>

                              <h2 class="large-font">
                                <a
                                  href="https://www.ofeed.com/%D8%AC%D8%B1%D8%A7%D9%81%20%D8%A7%D9%84%D8%B9%D9%85%D9%84%D8%A7%D8%AA/%D8%A7%D9%84%D8%A7%D9%82%D8%AA%D8%B5%D8%A7%D8%AF-%D8%A7%D9%84%D9%8A%D9%88%D9%86%D8%A7%D9%86%D9%8A-%D9%8A%D9%86%D9%83%D9%85%D8%B4-%D8%AE%D9%84%D8%A7%D9%84-%D8%A7%D9%84%D8%B1%D8%A8%D8%B9-%D8%A7%D9%84%D8%A3%D9%88%D9%84-%D9%85%D9%86-%D8%A7%D9%84%D8%B9%D8%A7%D9%85-%D8%A8%D8%B3%D8%A8%D8%A8-%D8%A7%D9%84%D9%83%D9%88%D8%B1%D9%88%D9%86%D8%A7">الاقتصاد
                                  اليوناني ينكمش خلال الربع الأول من العام بسبب الكورونا</a>
                              </h2>
                            </div>

                          </div>

                        </div>
                        <span class="view-all"><a href="https://www.ofeed.com/Catnew?Catagory=FG">شاهد المزيد</a></span>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div id="pgc-38-4-2" class="panel-grid-cell">
                <div id="panel-38-4-2-0"
                  class="so-panel widget widget_vmagazine_block_grid_list vmagazine_block_grid_list panel-first-child panel-last-child"
                  data-index="14">
                  <div class="panel-widget-style panel-widget-style-for-38-4-2-0">
                    <div class="vmagazine-grid-list-wrapp grid no-desc">
                      <div class="block-header clearfix">
                        <h4 class="block-title"><span class="title-bg">القسم التعليمي</span></h4>
                      </div>

                      <div class="vmagazine-grid-list block-post-wrapper grid">
                        <div class="posts-wrap">
                          <div class="single-post first-post clearfix wow fadeInUp" data-wow-duration="0.7s"
                            style="visibility: visible; animation-duration: 0.7s; animation-name: fadeInUp;">
                            <div class="post-thumb">
                              <a class="thumb-zoom"
                                href="https://www.ofeed.com/%D8%A7%D9%84%D9%82%D8%B3%D9%85%20%D8%A7%D9%84%D8%AA%D8%B9%D9%84%D9%8A%D9%85%D9%8A/%D8%A7%D9%84%D8%A8%D9%8A%D8%AA%D9%83%D9%88%D9%8A%D9%86-%D9%83%D9%8A%D9%81-%D9%86%D8%B4%D8%A3-%D9%88%D8%AA%D8%B7%D9%88%D8%B1-%D8%9F-"
                                title="تاريخ البيتكوين ">
                                <img
                                  src="images/34f7f3c2-9e98-4f1b-9f1c-455f02293987.jpg"
                                  alt="تاريخ البيتكوين " title="تاريخ البيتكوين ">
                                <div class="image-overlay"></div>
                              </a>
                            </div>

                            <div class="post-content-wrapper clearfix">
                              <div class="post-meta clearfix">
                                <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                <span class="post-view"><i class="fa fa-eye"></i>38</span>
                              </div>

                              <h2 class="large-font">
                                <a
                                  href="https://www.ofeed.com/%D8%A7%D9%84%D9%82%D8%B3%D9%85%20%D8%A7%D9%84%D8%AA%D8%B9%D9%84%D9%8A%D9%85%D9%8A/%D8%A7%D9%84%D8%A8%D9%8A%D8%AA%D9%83%D9%88%D9%8A%D9%86-%D9%83%D9%8A%D9%81-%D9%86%D8%B4%D8%A3-%D9%88%D8%AA%D8%B7%D9%88%D8%B1-%D8%9F-">البيتكوين
                                  كيف نشأ وتطور ؟ </a>
                              </h2>
                            </div>

                          </div>

                          <div class="single-post  clearfix wow fadeInUp" data-wow-duration="0.7s"
                            style="visibility: visible; animation-duration: 0.7s; animation-name: fadeInUp;">
                            <div class="post-thumb">
                              <a class="thumb-zoom"
                                href="https://www.ofeed.com/%D8%A7%D9%84%D9%82%D8%B3%D9%85%20%D8%A7%D9%84%D8%AA%D8%B9%D9%84%D9%8A%D9%85%D9%8A/%D9%83%D9%84-%D9%85%D8%A7-%D8%AA%D8%B1%D9%8A%D8%AF-%D9%85%D8%B9%D8%B1%D9%81%D8%AA%D9%87-%D8%B9%D9%86-%D8%A7%D9%84%D8%A8%D9%86%D9%83-%D8%A7%D9%84%D8%A7%D8%AD%D8%AA%D9%8A%D8%A7%D8%B7%D9%8A-%D8%A7%D9%84%D9%81%D9%8A%D8%AF%D8%B1%D8%A7%D9%84%D9%8A-%D9%88%D8%B3%D9%8A%D8%A7%D8%B3%D8%AA%D9%87-%D8%A7%D9%84%D9%86%D9%82%D8%AF%D9%8A%D8%A9"
                                title="البنك الاحتياطي الفيدرالي">
                                <img
                                  src="images/6e3477fd-db86-47af-ae87-66e67389f6d4.jpg"
                                  alt="البنك الاحتياطي الفيدرالي" title="البنك الاحتياطي الفيدرالي">
                                <div class="image-overlay"></div>
                              </a>
                            </div>

                            <div class="post-content-wrapper clearfix">
                              <div class="post-meta clearfix">
                                <span class="comments"><i class="far fa-thumbs-up"></i>8</span>
                                <span class="post-view"><i class="fa fa-eye"></i>1199</span>
                              </div>

                              <h2 class="large-font">
                                <a
                                  href="https://www.ofeed.com/%D8%A7%D9%84%D9%82%D8%B3%D9%85%20%D8%A7%D9%84%D8%AA%D8%B9%D9%84%D9%8A%D9%85%D9%8A/%D9%83%D9%84-%D9%85%D8%A7-%D8%AA%D8%B1%D9%8A%D8%AF-%D9%85%D8%B9%D8%B1%D9%81%D8%AA%D9%87-%D8%B9%D9%86-%D8%A7%D9%84%D8%A8%D9%86%D9%83-%D8%A7%D9%84%D8%A7%D8%AD%D8%AA%D9%8A%D8%A7%D8%B7%D9%8A-%D8%A7%D9%84%D9%81%D9%8A%D8%AF%D8%B1%D8%A7%D9%84%D9%8A-%D9%88%D8%B3%D9%8A%D8%A7%D8%B3%D8%AA%D9%87-%D8%A7%D9%84%D9%86%D9%82%D8%AF%D9%8A%D8%A9">كل
                                  ما تريد معرفته عن البنك الاحتياطي الفيدرالي وسياسته النقدية</a>
                              </h2>
                            </div>

                          </div>

                          <div class="single-post  clearfix wow fadeInUp" data-wow-duration="0.7s"
                            style="visibility: visible; animation-duration: 0.7s; animation-name: fadeInUp;">
                            <div class="post-thumb">
                              <a class="thumb-zoom"
                                href="https://www.ofeed.com/%D8%A7%D9%84%D9%82%D8%B3%D9%85%20%D8%A7%D9%84%D8%AA%D8%B9%D9%84%D9%8A%D9%85%D9%8A/%D9%83%D9%84-%D9%85%D8%A7-%D8%AA%D8%B1%D9%8A%D8%AF-%D9%85%D8%B9%D8%B1%D9%81%D8%AA%D9%87-%D8%B9%D9%86-%D8%A7%D9%84%D8%A8%D9%86%D9%83-%D8%A7%D9%84%D9%85%D8%B1%D9%83%D8%B2%D9%8A-%D8%A7%D9%84%D8%A3%D9%88%D8%B1%D9%88%D8%A8%D9%8A-%D9%88%D8%B3%D9%8A%D8%A7%D8%B3%D8%AA%D9%87-%D8%A7%D9%84%D9%86%D9%82%D8%AF%D9%8A%D8%A9"
                                title="">
                                <img
                                  src="images/9d6fb88b-a956-4652-bb01-6c271e6bc5fe.jpg"
                                  alt="البنك المركزي الأوروبي" title="">
                                <div class="image-overlay"></div>
                              </a>
                            </div>

                            <div class="post-content-wrapper clearfix">
                              <div class="post-meta clearfix">
                                <span class="comments"><i class="far fa-thumbs-up"></i>35</span>
                                <span class="post-view"><i class="fa fa-eye"></i>947</span>
                              </div>

                              <h2 class="large-font">
                                <a
                                  href="https://www.ofeed.com/%D8%A7%D9%84%D9%82%D8%B3%D9%85%20%D8%A7%D9%84%D8%AA%D8%B9%D9%84%D9%8A%D9%85%D9%8A/%D9%83%D9%84-%D9%85%D8%A7-%D8%AA%D8%B1%D9%8A%D8%AF-%D9%85%D8%B9%D8%B1%D9%81%D8%AA%D9%87-%D8%B9%D9%86-%D8%A7%D9%84%D8%A8%D9%86%D9%83-%D8%A7%D9%84%D9%85%D8%B1%D9%83%D8%B2%D9%8A-%D8%A7%D9%84%D8%A3%D9%88%D8%B1%D9%88%D8%A8%D9%8A-%D9%88%D8%B3%D9%8A%D8%A7%D8%B3%D8%AA%D9%87-%D8%A7%D9%84%D9%86%D9%82%D8%AF%D9%8A%D8%A9">كل
                                  ما تريد معرفته عن البنك المركزي الأوروبي وسياسته النقدية</a>
                              </h2>
                            </div>

                          </div>

                        </div>
                        <span class="view-all"><a href="https://www.ofeed.com/Catnew?Catagory=LF">شاهد المزيد</a></span>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
@endsection