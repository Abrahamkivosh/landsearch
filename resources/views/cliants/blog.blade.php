@extends('layouts.cliantapp')

@section('content')
<div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>Blog</li>
      </div>
    </div>
  </div>

  <section id="blog" class="container">
    <div class="blog">
      <div class="row">
        <div class="col-md-8">
          <div class="blog-item">
            <div class="row">
              <div class="col-xs-12 col-sm-2">
                <div class="entry-meta">
                  <span id="publish_date">07  JUNY</span>
                  <span><i class="fa fa-user"></i> <a href="#">John Doe</a></span>
                  <span><i class="fa fa-comment"></i> <a href="#">2 Comments</a></span>
                  <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
                </div>
              </div>

              <div class="col-xs-12 col-sm-10 blog-content">
                <a href="#"><img class="img-responsive img-blog col-xs-12 col-sm-4 col-md-3" src="{{ ('asset/images/policy.jpg')}}"width="100%" alt="" /></a>
                <h4>NATIONAL LAND USE POLICY</h4>
                <p>The absence of a clearly defined land use policy in Kenya after years of independence has
                    resulted in a haphazard approach to managing the different land use practices and policy responses.
                     Land use continues to be addressed through many uncoordinated legal and policy frameworks that have
                      done little to unravel the many issues that affect land use management.</p>
                {{-- <a class="btn btn-primary readmore">Read More <i class="fa fa-angle-right"></i></a> --}}
              </div>
            </div>
          </div>
          <!--/.blog-item-->

          <div class="blog-item">
            <div class="row">
              <div class="col-sm-2">
                <div class="entry-meta">
                  <span id="publish_date">08 August</span>
                  <span><i class="fa fa-user"></i> <a href="#">Esther Mukami</a></span>
                  <span><i class="fa fa-comment"></i> <a href="#">17 Comments</a></span>
                  <span><i class="fa fa-heart"></i><a href="#">16 Likes</a></span>
                </div>
              </div>
              <div class="col-sm-10 blog-content">
                <a href=""><img class="img-responsive img-blog col-xs-12 col-sm-4 col-md-3" src="{{ ('asset/images/blog1.png')}}"width="100%" alt="" /></a>
                <h4>National Spatial Plan 2015-2045</h4>
                <p>CThis National Spatial Plan is the first of its kind in the history of Kenya.
                    The Plan is a strategic vision that defines the general trend and direction
                    of spatial development for the country, covering the entire forty seven counties
                    and the Exclusive Economic Zone (EEZ). It is a long term Plan spanning a period
                    of thirty (30) years with 10 year periodical reviews.</p>
                {{-- <a class="btn btn-primary readmore">Read More <i class="fa fa-angle-right"></i></a> --}}
              </div>
            </div>
          </div>
          <!--/.blog-item-->

          <div class="blog-item">
                <div class="row">
                  <div class="col-sm-2">
                    <div class="entry-meta">
                      <span id="publish_date">06 September</span>
                      <span><i class="fa fa-user"></i> <a href="#">Mary Muthew</a></span>
                      <span><i class="fa fa-comment"></i> <a href="#">6 Comments</a></span>
                      <span><i class="fa fa-heart"></i><a href="#">514Likes</a></span>
                    </div>
                  </div>
                  <div class="col-sm-10 blog-content">
                    <a href=""><img class="img-responsive img-blog col-xs-12 col-sm-4 col-md-3" src="{{ ('asset/images/eviction.png')}}"width="100%" alt="" /></a>
                    <h4>
                            EVICTION AND SETTLEMENT GUIDELINES
                    </h4>
                    <p>The practice of forced eviction is a global phenomenon. Between 1995 and 2005,
                        a survey covering only ten countries, showed that over ten million people were
                        forcibly evicted. These people were left homeless and subject to deeper poverty,
                         discrimination and social exclusion. A number of such evictions involve entire
                         communities of tens or even hundreds of thousands</p>
                    {{-- <a class="btn btn-primary readmore">Read More <i class="fa fa-angle-right"></i></a> --}}
                  </div>
                </div>
              </div>
              <div class="blog-item">
                    <div class="row">
                      <div class="col-sm-2">
                        <div class="entry-meta">
                          <span id="publish_date">07  JUNY</span>
                          <span><i class="fa fa-user"></i> <a href="#">Joh Kamau</a></span>
                          <span><i class="fa fa-comment"></i> <a href="#">2 Comments</a></span>
                          <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
                        </div>
                      </div>
                      <div class="col-sm-10 blog-content">
                        <a href=""><img class="img-responsive img-blog col-xs-12 col-sm-4 col-md-3" src="{{ ('asset/images/blo.png')}}"width="100%" alt="" /></a>
                        <h4>
                                Kenya Sessional Paper on National Land Policy - Sessional Paper No. 3 of 2009 on National Land Policy
                        </h4>
                        <p>TThis is a resource from the Resource Equity LandWise database of resources.</p>
                        {{-- <a class="btn btn-primary readmore">Read More <i class="fa fa-angle-right"></i></a> --}}
                      </div>
                    </div>
                  </div>
                  <div class="blog-item">
                        <div class="row">
                          <div class="col-sm-2">
                            <div class="entry-meta">
                              <span id="publish_date">04 October</span>
                              <span><i class="fa fa-user"></i> <a href="#">JPhylis Ndonga</a></span>
                              <span><i class="fa fa-comment"></i> <a href="#">7Comments</a></span>
                              <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
                            </div>
                          </div>
                          <div class="col-sm-10 blog-content">
                            <a href=""><img class="img-responsive img-blog col-xs-12 col-sm-4 col-md-3" src="{{ ('asset/images/blog5.jpg')}}"width="100%" alt="" /></a>
                            <h4>
                                    How much does the world spend on the Sustainable Development Goals?
                            </h4>
                            <p>Pouring several colors of paint into a single bucket produces a gray pool of muck, not a shiny rainbow.</p>
                            {{-- <a class="btn btn-primary readmore">Read More <i class="fa fa-angle-right"></i></a> --}}
                          </div>
                        </div>
                      </div>
                      <div class="blog-item">
                            <div class="row">
                              <div class="col-sm-2">
                                <div class="entry-meta">
                                  <span id="publish_date">19 November</span>
                                  <span><i class="fa fa-user"></i> <a href="#">Joh Kamau</a></span>
                                  <span><i class="fa fa-comment"></i> <a href="#">68 Comments</a></span>
                                  <span><i class="fa fa-heart"></i><a href="#">5 Likes</a></span>
                                </div>
                              </div>
                              <div class="col-sm-10 blog-content">
                                <a href=""><img class="img-responsive img-blog col-xs-12 col-sm-4 col-md-3" src="{{ ('asset/images/blog6.jpg')}}"width="100%" alt="" /></a>
                                <h4>
                                        What the Climate Crisis Means for Land Rights
                                </h4>
                                <p>The climate crisis will reshape our relationships to land around the world. </p>
                                {{-- <a class="btn btn-primary readmore">Read More <i class="fa fa-angle-right"></i></a> --}}
                              </div>
                            </div>
                          </div>

          <ul class="pagination pagination-lg">
            <li><a href="#"><i class="fa fa-long-arrow-left"></i>Previous Page</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">Next Page<i class="fa fa-long-arrow-right"></i></a></li>
          </ul>
          <!--/.pagination-->
        </div>
        <!--/.col-md-8-->

        <aside class="col-md-4">
          <div class="widget search">
            <form role="form">
              <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
            </form>
          </div>
          <!--/.search-->

          <div class="widget categories">
            <h3>Recent Comments</h3>
            <div class="row">
              <div class="col-sm-12">
                <div class="single_comments">
                  <img src="images/blog/avatar3.png" alt="" />
                  <p>Over the past few weeks, the Land Portal along with colleagues at Cadasta,
                      have been hosting a three week online discussion </p>
                  <div class="entry-meta small muted">
                    <span>By <a href="#">Alex</a></span>
                  </div>
                </div>
                <div class="single_comments">
                  <img src="images/blog/avatar3.png" alt="" />
                  <p>Land distribution is an issue innately tied to inequality throughout the
                      region of Latin America and the Caribbean,</p>
                  <div class="entry-meta small muted">
                    <span>By <a href="#">Tom</a></span>
                  </div>
                </div>
                <div class="single_comments">
                  <img src="images/blog/avatar3.png" alt="" />
                  <p>Increasingly, governments and citizens in developing countries
                       as well as development agencies are using information technology  </p>
                  <div class="entry-meta small muted">
                    <span>By <a href="#">Vincent</a></span>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!--/.recent comments-->


          <div class="widget categories">
            <h3>Categories</h3>
            <div class="row">
              <div class="col-sm-6">
                <ul class="blog_category">
                  <li><a href="#">Land Administration</a></li>
                  <li><a href="#">Land Consolidation </a></li>
                  <li><a href="#">Rural Planning</a></li>
                  <li><a href="#">Deed Registration</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!--/.categories-->

          <div class="widget archieve">
            <h3>Archieve</h3>
            <div class="row">
              <div class="col-sm-12">
                <ul class="blog_archieve">
                  <li><a href="#"><i class="fa fa-angle-double-right"></i> December 2015 <span class="pull-right">(97)</span></a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i> November 2015 <span class="pull-right">(32)</span></a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i> October 2015 <span class="pull-right">(19)</span></a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2015 <span class="pull-right">(08)</span></a></li>
                </ul>
              </div>
            </div>
          </div>
          <!--/.archieve-->

          <div class="widget tags">
            <h3>Other Resources</h3>
            <ul class="tag-cloud">
              <li><a class="btn btn-xs btn-primary" href="#">urban planning</a></li>
              <li><a class="btn btn-xs btn-primary" href="#">town and country planning</a></li>
              <li><a class="btn btn-xs btn-primary" href="#">leases management</a></li>
              <li><a class="btn btn-xs btn-primary" href="#">surveyors</a></li>
              <li><a class="btn btn-xs btn-primary" href="#">land consolidation</a></li>
              <li><a class="btn btn-xs btn-primary" href="#">sustainable land use</a></li>
              <li><a class="btn btn-xs btn-primary" href="#"> use rights</a></li>
              <li><a class="btn btn-xs btn-primary" href="#">cover mapping</a></li>
              <li><a class="btn btn-xs btn-primary" href="#">minent domain</a></li>
              <li><a class="btn btn-xs btn-primary" href="#">agricaltural land management</a></li>
            </ul>
          </div>
          <!--/.tags-->

          <div class="widget blog_gallery">
            {{-- <h3>Our Gallery</h3> --}}
            <ul class="sidebar-gallery">
              <li><a href="#"><img src="images/blog/gallery1.png" alt="" /></a></li>
              <li><a href="#"><img src="images/blog/gallery2.png" alt="" /></a></li>
              <li><a href="#"><img src="images/blog/gallery3.png" alt="" /></a></li>
              <li><a href="#"><img src="images/blog/gallery4.png" alt="" /></a></li>
              <li><a href="#"><img src="images/blog/gallery5.png" alt="" /></a></li>
              <li><a href="#"><img src="images/blog/gallery6.png" alt="" /></a></li>
            </ul>
          </div>
          <!--/.blog_gallery-->
        </aside>
      </div>
      <!--/.row-->
    </div>
  </section>
  <!--/#blog-->
@stop
