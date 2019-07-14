@extends('layouts.app')

@section('title','答题闯关')

@section('content')
<style>
.hasBeenAnswer {
	background: #5d9cec;
	color:#fff;
}
</style>
  <link href="/css/main.css" rel="stylesheet" type="text/css" />
  <link href="/css/iconfont.css" rel="stylesheet" type="text/css" />
  <link href="/css/test.css" rel="stylesheet" type="text/css" />

<div class="main">
	<!--nr start-->
	<div class="test_main" style="margin-left:97px;margin-top:-40px;">
		<div class="nr_left">
			<div class="test">
				<form action="" method="post">
                    <div class="test_title" style="bottom:60px;">
                      
						<font><input type="button" name="test_jiaojuan" value="交卷"></font>
					</div>
					
						<div class="test_content">
							<div class="test_content_title">
								<h2 style="padding:13px 27px;">选择题</h2>
								<p>
									<span>共</span><i class="content_lit">10</i><span>题，</span><span>合计</span><i class="content_fs">100</i><span>分</span>
								</p>
							</div>
						</div>
						<div class="test_content_nr">
							<ul>
								
									<li id="qu_0_0">
										<div class="test_content_nr_tt" style="margin-top:3px;">
											<i>1</i><span>(10分)</span><font>在生产管理信息系统中，下列操作步骤能正确将工单推进流程的是（  ）</font><b class="icon iconfont">&#xe881;</b>
										</div>

										<div class="test_content_nr_main">
											<ul>
												
													<li class="option">
														
															<input type="radio" class="radioOrCheck" name="answer1"
																id="0_answer_1_option_1"
															/>
														
														
														<label for="0_answer_1_option_1">
															A.
															<p class="ue" style="display: inline;">在工具栏中点击“workflow”标签</p>
														</label>
													</li>
												
													<li class="option">
														
															<input type="radio" class="radioOrCheck" name="answer1"
																id="0_answer_1_option_2"
															/>
														
														
														<label for="0_answer_1_option_2">
															B.
															<p class="ue" style="display: inline;">在缺陷单界面中点击“推进流程”按钮</p>
														</label>
													</li>
												
													<li class="option">
														
															<input type="radio" class="radioOrCheck" name="answer1"
																id="0_answer_1_option_3"
															/>
														
														
														<label for="0_answer_1_option_3">
															C.
															<p class="ue" style="display: inline;">在缺陷单界面中点击“提交”按钮</p>
														</label>
													</li>
												
													<li class="option">
														
															<input type="radio" class="radioOrCheck" name="answer1"
																id="0_answer_1_option_4"
															/>
														
														
														<label for="0_answer_1_option_4">
															D.
															<p class="ue" style="display: inline;">后台启动流程推进</p>
														</label>
													</li>
												
											</ul>
										</div>
									</li>
								
									
									
									
								
								

									<li id="qu_0_1">
										<div class="test_content_nr_tt">
											<i>2</i><span>(10分)</span><font>什么叫特殊巡视（  ）</font><b class="icon iconfont">&#xe881;</b>
										</div>

										<div class="test_content_nr_main">
											<ul>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer23"
																id="1_answer_23_option_1"
															/>
														
														<label for="1_answer_23_option_1">
															A.
															<p class="ue" style="display: inline;">由专职巡线员按规定的巡视周期（一般为每月一次）巡视线路</p>
														</label>
													</li>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer23"
																id="1_answer_23_option_2"
															/>
														
														<label for="1_answer_23_option_2">
															B.
															<p class="ue" style="display: inline;">由领导安排巡线员对线路进行周期性巡视</p>
														</label>
													</li>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer23"
																id="1_answer_23_option_3"
															/>
														
														<label for="1_answer_23_option_3">
															C.
															<p class="ue" style="display: inline;">在节假日以及气候骤变时对线路进行的巡视</p>
														</label>
													</li>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer23"
																id="1_answer_23_option_4"
															/>
														
														<label for="1_answer_23_option_4">
															D.
															<p class="ue" style="display: inline;">在线路发生故障后进行的巡视</p>
														</label>
													</li>
												
											</ul>
										</div>
									</li>
								
									<li id="qu_0_2">
										<div class="test_content_nr_tt">
											<i>3</i><span>(10分)</span><font>线路巡视中检查杆塔本身时，各部件应无歪斜现象，电杆偏离线路中心线不应大于（  ）m；倾斜度不应大于杆长的（  ）</font><b class="icon iconfont">&#xe881;</b>
										</div>

										<div class="test_content_nr_main">
											<ul>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer24"
																id="1_answer_24_option_1"
															/>
														
														<label for="1_answer_24_option_1">
															A.
															<p class="ue" style="display: inline;">0.05  1%</p>
														</label>
													</li>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer24"
																id="1_answer_24_option_2"
															/>
														
														<label for="1_answer_24_option_2">
															B.
															<p class="ue" style="display: inline;">0.1  1.5%</p>
														</label>
													</li>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer24"
																id="1_answer_24_option_3"
															/>
														
														<label for="1_answer_24_option_3">
															C.
															<p class="ue" style="display: inline;">0.15   1.5%</p>
														</label>
													</li>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer24"
																id="1_answer_24_option_4"
															/>
														
														<label for="1_answer_24_option_4">
															D.
															<p class="ue" style="display: inline;">0.1   2.0%</p>
														</label>
													</li>
												
											</ul>
										</div>
									</li>
								
									<li id="qu_0_3">
										<div class="test_content_nr_tt">
											<i>4</i><span>(10分)</span><font>线路巡视中横担歪斜不超过长度的（  ）</font><b class="icon iconfont">&#xe881;</b>
										</div>

										<div class="test_content_nr_main">
											<ul>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer25"
																id="1_answer_25_option_1"
															/>
														
														<label for="1_answer_25_option_1">
															A.
															<p class="ue" style="display: inline;">1%</p>
														</label>
													</li>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer25"
																id="1_answer_25_option_2"
															/>
														
														<label for="1_answer_25_option_2">
															B.
															<p class="ue" style="display: inline;">1.5%</p>
														</label>
													</li>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer25"
																id="1_answer_25_option_3"
															/>
														
														<label for="1_answer_25_option_3">
															C.
															<p class="ue" style="display: inline;">2%</p>
														</label>
													</li>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer25"
																id="1_answer_25_option_4"
															/>
														
														<label for="1_answer_25_option_4">
															D.
															<p class="ue" style="display: inline;">2.5%</p>
														</label>
													</li>
												
											</ul>
										</div>
									</li>
								
									<li id="qu_0_4">
										<div class="test_content_nr_tt">
											<i>5</i><span>(10分)</span><font>线路巡视中检查线夹的内容不包括（  ）</font><b class="icon iconfont">&#xe881;</b>
										</div>

										<div class="test_content_nr_main">
											<ul>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer26"
																id="1_answer_26_option_1"
															/>
														
														<label for="1_answer_26_option_1">
															A.
															<p class="ue" style="display: inline;">检查线夹大小尺寸</p>
														</label>
													</li>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer26"
																id="1_answer_26_option_2"
															/>
														
														<label for="1_answer_26_option_2">
															B.
															<p class="ue" style="display: inline;">检查线夹有无缺少螺丝和垫圈</p>
														</label>
													</li>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer26"
																id="1_answer_26_option_3"
															/>
														
														<label for="1_answer_26_option_3">
															C.
															<p class="ue" style="display: inline;">检查线夹是否有螺母松扣、开口销丢失或脱出现象</p>
														</label>
													</li>
												
											</ul>
										</div>
									</li>
								
									<li id="qu_0_5">
										<div class="test_content_nr_tt">
											<i>6</i><span>(10分)</span><font>以下线路巡视中检查拉线的主要内容不包括（  ）</font><b class="icon iconfont">&#xe881;</b>
										</div>

										<div class="test_content_nr_main">
											<ul>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer27"
																id="1_answer_27_option_1"
															/>
														
														<label for="1_answer_27_option_1">
															A.
															<p class="ue" style="display: inline;">检查拉线基础是否有松动、土壤下沉、基础上拔等情况, 拉线是否松弛、锈蚀、断股</p>
														</label>
													</li>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer27"
																id="1_answer_27_option_2"
															/>
														
														<label for="1_answer_27_option_2">
															B.
															<p class="ue" style="display: inline;">检查拉线长度</p>
														</label>
													</li>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer27"
																id="1_answer_27_option_3"
															/>
														
														<label for="1_answer_27_option_3">
															C.
															<p class="ue" style="display: inline;">检查拉线棒、楔型线夹、UT型线夹、抱箍等是否有锈蚀和松动，UT型线夹螺母是否丢失</p>
														</label>
													</li>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer27"
																id="1_answer_27_option_4"
															/>
														
														<label for="1_answer_27_option_4">
															D.
															<p class="ue" style="display: inline;">检查避雷线与引下线连接处是否缺少夹具，接地引下线与接地装置连接线是否断线或松动，接地螺母是否松动或丢失</p>
														</label>
													</li>
												
											</ul>
										</div>
									</li>
								
									<li id="qu_0_6">
										<div class="test_content_nr_tt">
											<i>7</i><span>(10分)</span><font>不属于拉、合跌落式熔断器所需要的工具是（  ）</font><b class="icon iconfont">&#xe881;</b>
										</div>

										<div class="test_content_nr_main">
											<ul>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer28"
																id="1_answer_28_option_1"
															/>
														
														<label for="1_answer_28_option_1">
															A.
															<p class="ue" style="display: inline;">安全帽、安全带</p>
														</label>
													</li>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer28"
																id="1_answer_28_option_2"
															/>
														
														<label for="1_answer_28_option_2">
															B.
															<p class="ue" style="display: inline;">绝缘手套、绝缘鞋、绝缘棒</p>
														</label>
													</li>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer28"
																id="1_answer_28_option_3"
															/>
														
														<label for="1_answer_28_option_3">
															C.
															<p class="ue" style="display: inline;">脚扣（登高工具）</p>
														</label>
													</li>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer28"
																id="1_answer_28_option_4"
															/>
														
														<label for="1_answer_28_option_4">
															D.
															<p class="ue" style="display: inline;">验电器</p>
														</label>
													</li>
												
											</ul>
										</div>
									</li>
								
									<li id="qu_0_7">
										<div class="test_content_nr_tt">
											<i>8</i><span>(10分)</span><font>电量是以电能表记录的用电千瓦数为依据计算的。根据客户电能表的安装位置，有几种计算方式，下列属于低供低计的计算方式是（  ）</font><b class="icon iconfont">&#xe881;</b>
										</div>

										<div class="test_content_nr_main">
											<ul>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer29"
																id="1_answer_29_option_1"
															/>
														
														<label for="1_answer_29_option_1">
															A.
															<p class="ue" style="display: inline;">电量=TA×TV×（当月电能表计量示数-上月电能表计量示数）</p>
														</label>
													</li>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer29"
																id="1_answer_29_option_2"
															/>
														
														<label for="1_answer_29_option_2">
															B.
															<p class="ue" style="display: inline;">电量=TA×（当月电能表计量示数-上月电能表计量示数）</p>
														</label>
													</li>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer29"
																id="1_answer_29_option_3"
															/>
														
														<label for="1_answer_29_option_3">
															C.
															<p class="ue" style="display: inline;">电量=TA×（当月电能表计量示数-上月电能表计量示数）</p>
														</label>
													</li>
												
											</ul>
										</div>
									</li>
								
									<li id="qu_0_8">
										<div class="test_content_nr_tt">
											<i>9</i><span>(10分)</span><font>以变压器容量计算基本电费的用户,其备用的变压器（含高压电动机）说法正确的是（  ）</font><b class="icon iconfont">&#xe881;</b>
										</div>

										<div class="test_content_nr_main">
											<ul>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer30"
																id="1_answer_30_option_1"
															/>
														
														<label for="1_answer_30_option_1">
															A.
															<p class="ue" style="display: inline;">所有状态皆需缴纳基本电费</p>
														</label>
													</li>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer30"
																id="1_answer_30_option_2"
															/>
														
														<label for="1_answer_30_option_2">
															B.
															<p class="ue" style="display: inline;">所有状态皆不用缴纳基本电费</p>
														</label>
													</li>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer30"
																id="1_answer_30_option_3"
															/>
														
														<label for="1_answer_30_option_3">
															C.
															<p class="ue" style="display: inline;">属冷备用状态并经供电企业加封的，不用交基本电费，属热备用状态的或未经加封的，需缴纳基本电费</p>
														</label>
													</li>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer30"
																id="1_answer_30_option_4"
															/>
														
														<label for="1_answer_30_option_4">
															D.
															<p class="ue" style="display: inline;">属冷备用状态并经供电企业加封的，需缴纳基本电费，属热备用状态的或未经加封的，不用交基本电费</p>
														</label>
													</li>
												
											</ul>
										</div>
									</li>
									
								<li id="qu_0_9">
										<div class="test_content_nr_tt">
											<i>10</i><span>(10分)</span><font>以变压器容量计算基本电费的用户,其备用的变压器（含高压电动机）说法正确的是（  ）</font><b class="icon iconfont">&#xe881;</b>
										</div>

										<div class="test_content_nr_main">
											<ul>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer30"
																id="1_answer_30_option_1"
															/>
														
														<label for="1_answer_30_option_1">
															A.
															<p class="ue" style="display: inline;">所有状态皆需缴纳基本电费</p>
														</label>
													</li>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer30"
																id="1_answer_30_option_2"
															/>
														
														<label for="1_answer_30_option_2">
															B.
															<p class="ue" style="display: inline;">所有状态皆不用缴纳基本电费</p>
														</label>
													</li>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer30"
																id="1_answer_30_option_3"
															/>
														
														<label for="1_answer_30_option_3">
															C.
															<p class="ue" style="display: inline;">属冷备用状态并经供电企业加封的，不用交基本电费，属热备用状态的或未经加封的，需缴纳基本电费</p>
														</label>
													</li>
												
													<li class="option">
														
														
															<input type="checkbox" class="radioOrCheck" name="answer30"
																id="1_answer_30_option_4"
															/>
														
														<label for="1_answer_30_option_4">
															D.
															<p class="ue" style="display: inline;">属冷备用状态并经供电企业加封的，需缴纳基本电费，属热备用状态的或未经加封的，不用交基本电费</p>
														</label>
													</li>
												
											</ul>
										</div>
									</li>
							</ul>
						</div>
					
				</form>
			</div>

		</div>
		
	</div>
	<!--nr end-->
	<div class="foot"></div>
</div>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/jquery.easy-pie-chart.js"></script>
<!--时间js-->
<script src="js/jquery.countdown.js"></script>
<script>
	window.jQuery(function($) {
		"use strict";
		
		$('time').countDown({
			with_separators : false
		});
		$('.alt-1').countDown({
			css_class : 'countdown-alt-1'
		});
		$('.alt-2').countDown({
			css_class : 'countdown-alt-2'
		});
		
	});
	
	
	$(function() {
		$('li.option label').click(function() {
		debugger;
			var examId = $(this).closest('.test_content_nr_main').closest('li').attr('id'); // 得到题目ID
			var cardLi = $('a[href=#' + examId + ']'); // 根据题目ID找到对应答题卡
			// 设置已答题
			if(!cardLi.hasClass('hasBeenAnswer')){
				cardLi.addClass('hasBeenAnswer');
			}
			
		});
	});
</script>

<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';"> 
</div>
@stop
