<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Index;

/**
 * OrderDetail
 * @ORM\Table(name="order_detail", indexes={@Index(name="index_goods_id", columns={"goods_id"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrderDetailRepository")
 */
class OrderDetail
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var string 商品信息
	 * @ORM\Column(name="name", type="string", length=255, options={"comment"="商品信息"})
	 */
	private $name;

	/**
	 * @var string
	 * @ORM\Column(name="click_time", type="datetime", options={"comment"="点击时间"})
	 */
	private $clickTime;

	/**
	 * @var string
	 * @ORM\Column(name="create_time", type="datetime", options={"comment"="创建时间"})
	 */
	private $createTime;

	/**
	 * @var integer
	 * @ORM\Column(name="goods_id", type="bigint", options={"comment"="商品ID"})
	 */
	private $goodsId;

	/**
	 * @var string
	 * @ORM\Column(name="wangwang", type="string", length=255, options={"comment"="掌柜旺旺"})
	 */
	private $wangwang;

	/**
	 * @var string
	 * @ORM\Column(name="shop", type="string", length=255, options={"comment"="所属店铺"})
	 */
	private $shop;

	/**
	 * @var integer
	 * @ORM\Column(name="buy_number", type="smallint", options={"comment"="商品数量"})
	 */
	private $buyNumber;

	/**
	 * @var double
	 * @ORM\Column(name="price", type="decimal", scale=2, options={"comment"="商品单价"})
	 */
	private $price;

	/**
	 * @var string
	 * @ORM\Column(name="order_status", type="string", length=100, options={"comment"="订单状态"})
	 */
	private $orderStatus;

	/**
	 * @var string
	 * @ORM\Column(name="order_type", type="string", length=50, options={"comment"="订单类型"})
	 */
	private $orderType;

	/**
	 * @var string
	 * @ORM\Column(name="income_ratio", type="string", length=20, options={"comment"="收入比率"})
	 */
	private $incomeRatio;

	/**
	 * @var string
	 * @ORM\Column(name="divide_into", type="string", length=20, options={"comment"="分成比例"})
	 */
	private $divideInto;

	/**
	 * @var double
	 * @ORM\Column(name="pay_price", type="decimal", scale=2, options={"comment"="付款金额"})
	 */
	private $payPrice;

	/**
	 * @var double
	 * @ORM\Column(name="estimate", type="decimal", scale=2, options={"comment"="效果预估"})
	 */
	private $estimate;

	/**
	 * @var double
	 * @ORM\Column(name="balance_price", type="decimal", scale=2, options={"comment"="结算金额"})
	 */
	private $balancePrice;

	/**
	 * @var double
	 * @ORM\Column(name="estimated_income", type="decimal", scale=2, options={"comment"="预估收入"})
	 */
	private $estimatedIncome;

	/**
	 * @var string
	 * @ORM\Column(name="balance_time", type="datetime", options={"comment"="结算时间"})
	 */
	private $balanceTime;

	/**
	 * @var string
	 * @ORM\Column(name="commission_rate", type="string", length=20, options={"comment"="佣金比率"})
	 */
	private $commissionRate;

	/**
	 * @var double
	 * @ORM\Column(name="commission_amount", type="decimal", scale=2, options={"comment"="佣金金额"})
	 */
	private $commissionAmount;

	/**
	 * @var string
	 * @ORM\Column(name="subsidy_proportion", type="string", length=20, options={"comment"="补贴比例"})
	 */
	private $subsidyProportion;

	/**
	 * @var double
	 * @ORM\Column(name="subsidy_amount", type="decimal", scale=2, options={"comment"="补贴金额"})
	 */
	private $subsidyAmount;

	/**
	 * @var double
	 * @ORM\Column(name="subsidy_type", type="string", length=20, options={"comment"="补贴类型"})
	 */
	private $subsidyType;

	/**
	 * @var string
	 * @ORM\Column(name="transaction_platform", type="string", length=50, options={"comment"="成交平台"})
	 */
	private $transactionPlatform;

	/**
	 * @var string
	 * @ORM\Column(name="third_party_service", type="string", length=100, options={"comment"="第三方服务来源"})
	 */
	private $thirdPartyService;

	/**
	 * @var string
	 * @ORM\Column(name="order_id", type="string", length=50, unique=true, options={"comment"="订单编号"})
	 */
	private $orderId;

	/**
	 * @var string
	 * @ORM\Column(name="category_name", type="string", length=100, options={"comment"="类目名称"})
	 */
	private $categoryName;

	/**
	 * @var integer
	 * @ORM\Column(name="source_media_id", type="integer", options={"comment"="来源媒体ID"})
	 */
	private $sourceMediaId;

	/**
	 * @var string
	 * @ORM\Column(name="source_media_name", type="string", length=50, options={"comment"="来源媒体名称"})
	 */
	private $sourceMediaName;

	/**
	 * @var integer
	 * @ORM\Column(name="ad_id", type="integer", options={"comment"="广告位ID"})
	 */
	private $adId;


	/**
	 * @var string
	 * @ORM\Column(name="ad_name", type="string", length=50, options={"comment"="广告位名称"})
	 */
	private $adName;

	/**
	 * @var string
	 * @ORM\Column(name="status", type="string", columnDefinition="ENUM('0', '1')", options={"comment"="状态", "default"="1"})
	 */
	private $status;

	/**
	 * @return int
	 */
	public function getStatus()
	{
		return $this->status;
	}

	/**
	 * @param int $status
	 *
	 * @return OrderDetail
	 */
	public function setStatus($status)
	{
		$this->status = $status;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getSourceMediaName()
	{
		return $this->sourceMediaName;
	}

	/**
	 * @param string $sourceMediaName
	 *
	 * @return OrderDetail
	 */
	public function setSourceMediaName($sourceMediaName)
	{
		$this->sourceMediaName = $sourceMediaName;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getAdId()
	{
		return $this->adId;
	}

	/**
	 * @param int $adId
	 *
	 * @return OrderDetail
	 */
	public function setAdId($adId)
	{
		$this->adId = $adId;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getAdName()
	{
		return $this->adName;
	}

	/**
	 * @param string $adName
	 *
	 * @return OrderDetail
	 */
	public function setAdName($adName)
	{
		$this->adName = $adName;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCategoryName()
	{
		return $this->categoryName;
	}

	/**
	 * @param string $categoryName
	 *
	 * @return OrderDetail
	 */
	public function setCategoryName($categoryName)
	{
		$this->categoryName = $categoryName;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getThirdPartyService()
	{
		return $this->thirdPartyService;
	}

	/**
	 * @param string $thirdPartyService
	 *
	 * @return OrderDetail
	 */
	public function setThirdPartyService($thirdPartyService)
	{
		$this->thirdPartyService = $thirdPartyService;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getOrderId()
	{
		return $this->orderId;
	}

	/**
	 * @param string $orderId
	 *
	 * @return OrderDetail
	 */
	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;

		return $this;
	}

	/**
	 * @return float
	 */
	public function getSubsidyType()
	{
		return $this->subsidyType;
	}

	/**
	 * @param float $subsidyType
	 */
	public function setSubsidyType($subsidyType)
	{
		$this->subsidyType = $subsidyType;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getTransactionPlatform()
	{
		return $this->transactionPlatform;
	}

	/**
	 * @param string $transactionPlatform
	 *
	 * @return OrderDetail
	 */
	public function setTransactionPlatform($transactionPlatform)
	{
		$this->transactionPlatform = $transactionPlatform;

		return $this;
	}

	/**
	 * @return float
	 */
	public function getSubsidyAmount()
	{
		return $this->subsidyAmount;
	}

	/**
	 * @param float $subsidyAmount
	 */
	public function setSubsidyAmount($subsidyAmount)
	{
		$this->subsidyAmount = $subsidyAmount;

		return $this;
	}

	/**
	 * Get id
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set name
	 *
	 * @param string $name
	 *
	 * @return OrderDetail
	 */
	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}

	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @return string
	 */
	public function getClickTime()
	{
		return $this->clickTime;
	}

	/**
	 * @param string $clickTime
	 */
	public function setClickTime($clickTime)
	{
		$this->clickTime = $clickTime;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCreateTime()
	{
		return $this->createTime;
	}

	/**
	 * @param string $createTime
	 */
	public function setCreateTime($createTime)
	{
		$this->createTime = $createTime;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getGoodsId()
	{
		return $this->goodsId;
	}

	/**
	 * @param int $goodsId
	 */
	public function setGoodsId($goodsId)
	{
		$this->goodsId = $goodsId;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getWangwang()
	{
		return $this->wangwang;
	}

	/**
	 * @param string $wangwang
	 */
	public function setWangwang($wangwang)
	{
		$this->wangwang = $wangwang;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getShop()
	{
		return $this->shop;
	}

	/**
	 * @param string $shop
	 */
	public function setShop($shop)
	{
		$this->shop = $shop;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getBuyNumber()
	{
		return $this->buyNumber;
	}

	/**
	 * @param mixed $buyNumber
	 */
	public function setBuyNumber($buyNumber)
	{
		$this->buyNumber = $buyNumber;

		return $this;
	}

	/**
	 * @return float
	 */
	public function getPrice()
	{
		return $this->price;
	}

	/**
	 * @param float $price
	 */
	public function setPrice($price)
	{
		$this->price = $price;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getOrderStatus()
	{
		return $this->orderStatus;
	}

	/**
	 * @param string $orderStatus
	 */
	public function setOrderStatus($orderStatus)
	{
		$this->orderStatus = $orderStatus;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getOrderType()
	{
		return $this->orderType;
	}

	/**
	 * @param string $orderType
	 */
	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getIncomeRatio()
	{
		return $this->incomeRatio;
	}

	/**
	 * @param string $incomeRatio
	 */
	public function setIncomeRatio($incomeRatio)
	{
		$this->incomeRatio = $incomeRatio;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getDivideInto()
	{
		return $this->divideInto;
	}

	/**
	 * @param string $divideInto
	 */
	public function setDivideInto($divideInto)
	{
		$this->divideInto = $divideInto;

		return $this;
	}

	/**
	 * @return float
	 */
	public function getPayPrice()
	{
		return $this->payPrice;
	}

	/**
	 * @param float $payPrice
	 */
	public function setPayPrice($payPrice)
	{
		$this->payPrice = $payPrice;

		return $this;
	}

	/**
	 * @return float
	 */
	public function getEstimate()
	{
		return $this->estimate;
	}

	/**
	 * @param float $estimate
	 */
	public function setEstimate($estimate)
	{
		$this->estimate = $estimate;

		return $this;
	}

	/**
	 * @return float
	 */
	public function getBalancePrice()
	{
		return $this->balancePrice;
	}

	/**
	 * @param float $balancePrice
	 */
	public function setBalancePrice($balancePrice)
	{
		$this->balancePrice = $balancePrice;

		return $this;
	}

	/**
	 * @return float
	 */
	public function getEstimatedIncome()
	{
		return $this->estimatedIncome;
	}

	/**
	 * @param float $estimatedIncome
	 */
	public function setEstimatedIncome($estimatedIncome)
	{
		$this->estimatedIncome = $estimatedIncome;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getBalanceTime()
	{
		return $this->balanceTime;
	}

	/**
	 * @param string $balanceTime
	 */
	public function setBalanceTime($balanceTime)
	{
		$this->balanceTime = $balanceTime;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCommissionRate()
	{
		return $this->commissionRate;
	}

	/**
	 * @param string $commissionRate
	 */
	public function setCommissionRate($commissionRate)
	{
		$this->commissionRate = $commissionRate;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCommissionAmount()
	{
		return $this->commissionAmount;
	}

	/**
	 * @param mixed $commissionAmount
	 */
	public function setCommissionAmount($commissionAmount)
	{
		$this->commissionAmount = $commissionAmount;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getSubsidyProportion()
	{
		return $this->subsidyProportion;
	}

	/**
	 * @param string $subsidyProportion
	 */
	public function setSubsidyProportion($subsidyProportion)
	{
		$this->subsidyProportion = $subsidyProportion;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getSourceMediaId()
	{
		return $this->sourceMediaId;
	}

	/**
	 * @param int $sourceMediaId
	 */
	public function setSourceMediaId($sourceMediaId)
	{
		$this->sourceMediaId = $sourceMediaId;

		return $this;
	}
}

