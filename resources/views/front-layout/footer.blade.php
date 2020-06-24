<footer id="colophon" class="site-footer footer-two">
      <div class="footer-widgets col-4 clearfix">
        <div class="top-footer-wrap">
          <div class="vmagazine-container">
            <div class="block footer-widget-1">
              <div id="vmagazine_recent_post-2" class="widget widget_vmagazine_recent_post">
                <h4 class="block-title">
                  <span class="title-bg">احدث المقالات
                  </span>
                </h4>
                <div class="vmagazine-rec-posts recent-post-widget block_layout_2">
                  @if(!$posts->isEmpty())
                    @foreach($posts as $key => $post)
                      @if($key < 3)
                        <div class="recent-posts-content wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                          <div class="image-recent-post post-thumb">
                            <a href="/{{$post['slug']}}"
                              class="thumb-zoom">
                              <img class="lazy"
                                src="/images/{{$post['thumbnail']}}"
                                alt="{{$post['title']}}" title="{{$post['title']}}">
                              <div class="image-overlay"></div>
                            </a>
                          </div>
                          <div class="recent-post-content">
                            <a
                              href="/{{$post['slug']}}">{{$post['title']}}
                            </a>
                            <div class="posted-date">
                              <span class="posted-on"><i class="fa fa-clock-o"></i>{{$post['readableCreatedAt']}}</span>
                            </div>
                          </div>
                        </div>
                      @endif
                    @endforeach
                  @endif
                  
                </div>
              </div>
            </div>
            <div class="block footer-widget-2">
              <div id="nav_menu-2" class="widget widget_nav_menu">
                <h4 class="widget-title"><span class="title-bg"><span class="title-bg">كن على تواصل معنا</span></span>
                </h4>
                <div class="menu-footer-menu-container">
                  برج بوليفارد بلازا 1 مكتب 1602 ، إعمار سكوير ، دبي ، الإمارات العربية المتحدة
                  <br><a href="tel:0097144306868">0097144306868</a>
                  <br><a href="mailto:info@ofeed.com">info@ofeed.com</a>
                </div>
              </div>
            </div>
            <div class="block footer-widget-3">
              <div id="tag_cloud-2" class="widget widget_tag_cloud">
                <h4 class="widget-title"><span class="title-bg"><span class="title-bg">روابط</span></span></h4>
                <div class="tagcloud">
                  <a href="https://www.ofeed.com/about_us" class="tag-cloud-link tag-link-38 tag-link-position-1"
                    style="font-size: 16.4pt;" aria-label="about_us">من نحن</a>
                  <a href="https://www.ofeed.com/privacy_policy" class="tag-cloud-link tag-link-51 tag-link-position-2"
                    style="font-size: 16.4pt;" aria-label="privacy_policy">سياسة الخصوصية</a>
                  <a href="https://www.ofeed.com/return_policy" class="tag-cloud-link tag-link-49 tag-link-position-3"
                    style="font-size: 16.4pt;" aria-label="return_policy">سياسة الإسترجاع</a>
                  <a href="https://www.ofeed.com/career_center" class="tag-cloud-link tag-link-5 tag-link-position-4"
                    style="font-size: 16.4pt;" aria-label="career_center">الوظائف</a>
                  <a href="https://www.ofeed.com/terms_and_conditions"
                    class="tag-cloud-link tag-link-6 tag-link-position-5" style="font-size: 22pt;"
                    aria-label="terms_and_conditions">الشروط والأحكام</a>
                  <a href="https://www.ofeed.com/contact_us" class="tag-cloud-link tag-link-39 tag-link-position-6"
                    style="font-size: 8pt;" aria-label="contact_us">اتصل بنا</a>
                  <a href="https://www.ofeed.com/sitemap.xml" class="tag-cloud-link tag-link-52 tag-link-position-7"
                    style="font-size: 8pt;" aria-label="sitemap">خريطة الموقع</a>
                  <a href="https://www.ofeed.com/price_plansar" class="tag-cloud-link tag-link-37 tag-link-position-8"
                    style="font-size: 8pt; background: #2E3567; color: #FFF; border-color: #2E3567;"
                    aria-label="Recommendation">التوصيات</a>
                </div>
              </div>
            </div>
            <div class="block footer-widget-4">
              <div id="media_gallery-2" class="widget widget_media_gallery">
                <h4 class="widget-title"><span class="title-bg"><span class="title-bg">حول Ofeed</span></span></h4>
                <div id="gallery-1" class="gallery galleryid-38 gallery-columns-4 gallery-size-thumbnail">
                  ofeed هي علامة تجارية مملوكة لشركة D1STP والتى تمت الموافقة عليها وتنظيمها بموجب ترخيص رقم 6006056 من
                  رأس الخيمة , دولة الإمارات العربية المتحدة
                </div>
              </div>
              <div class="apss_email_popup_content">
                <h4 class="widget-title"><span class="title-bg"><span class="title-bg">أشترك في القائمه
                      البريدية</span></span></h4>
                <div class="apss_email_popup_form">
                  <div class="apss_email_popup_name apss-email-block">
                    <input type="text" id="apss_email_popup_name" placeholder="الاسم"
                      onkeyup="if (!window.__cfRLUnblockHandlers) return false; removeMe(&#39;apss_email_popup_name_error&#39;);">
                    <div class="error apss_email_popup_name_error"></div>
                  </div>
                  <div class="apss_email_popup_from apss-email-block">
                    <input type="text" id="apss_email_popup_from" placeholder="الحساب الألكتروني"
                      onkeyup="if (!window.__cfRLUnblockHandlers) return false; removeMe(&#39;apss_email_popup_from_error&#39;);">
                    <div class="error apss_email_popup_from_error"></div>
                  </div>
                </div>
                <span class="cat-links">
                  <button id="apss_email_popup_send_email" class="apss-the-button cat-30">أرسل</button>
                </span>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4 clearfix">
        <div class="top-footer-wrap">
          <div class="vmagazine-container">
            <span class="title-bg"><span class="title-bg">تحذير المخاطرة:</span></span><small> المتاجرة باستخدام الرافعة
              المالية في أسواق المال ينطوي على مخاطر عالية جدًا لا تتناسب مع جميع أنواع المستثمرين، يجب عليك أن تستوعب
              حجم المخاطرة التي قد تتعرض لها أموالك. جميع ما يطرح في الموقع من آراء وتحليلات وتوصيات ومحتويات هو من باب
              المعلومات العامة ولا يجب أن يتخذ كأداة لاتخاذ أي قرارات استثمارية بالبيع أو الشراء. الرجاء الاطلاع على
              تحذير المخاطرة التفصيلي بالضغط <a style="color: #4c66a3"
                href="https://www.ofeed.com/terms_and_conditions"> هنا</a>.
            </small>
          </div>
        </div>
      </div>

      <div class="buttom-footer footer_one">
        <div class="footer-btm-wrap">
          <div class="vmagazine-container">
            <div class="vmagazine-btm-ftr">
              <div class="footer-credit">
                <div class="site-info" style="color:white">
                  © جميع الحقوق محفوظة Ofeed - 2020
                </div>

              </div>
              <div class="footer-social">
                <div class="site-info">
                  <img src="/images/Payments.png" alt="logo" style="width: 360px;"
                    class="img-responsive">
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>