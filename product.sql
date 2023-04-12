-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 04:46 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobileheaven`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(11) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productDesc` varchar(1500) NOT NULL,
  `productImage1` varchar(200) NOT NULL,
  `productImage2` varchar(200) NOT NULL,
  `productImage3` varchar(200) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productCategory` varchar(100) NOT NULL,
  `qtyInStock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `productName`, `productDesc`, `productImage1`, `productImage2`, `productImage3`, `productPrice`, `productCategory`, `qtyInStock`) VALUES
(1001, 'Samsung Galaxy S23 Ultra', 'BACK CAMERA: 200MP + 10MP + 10MP + 12MP<br>BATTERY: 5000MAH<br>CPU: SNAPDRAGON 8 GEN2<br>MEMORY: 12GB<br>PROTECTION: IP68, ARMOUR ALUMINIUM FRAME, GORRILA GLASS VICTUS 2<br>STORAGE: 256GB<br>COLOR: BLACK<br>DISPLAY: GORILLA GLASS VICTUS 2 (120HZ)<br>FRONT CAMERA: 12MP<br>NETWORK: 5G<br>REFRESH RATE: 120HZ<br>RESOLUTION: QHD<br>SIM SIZE: NANO-SIM<br>VIDEO: 8K@30FPS<br>WARRANTY: 24MONTHS<br>', 'productimages/samsungS23/SM1-S918BZKCAFA-1.png', 'productimages/samsungS23/SM2-S918BZKCAFA-7.png', 'productimages/samsungS23/SM3-S918BZKCAFA-1.png', 67990, 'PS001', 10),
(1002, 'Samsung Galaxy A23 128GB ', 'BACK CAMERA: 50MP + 5MP + 2MP + 2MP<br>BATTERY: 5000 MAH<br>DISPLAY: 6.6\"<br>FRONT CAMERA: 8MP<br>MEMORY: 4GB<br>STORAGE: 128GB<br>CPU: OCTA-CORE<br>NETWORK: 4G<br>RESOLUTION: FHD<br>SIM SIZE: NANO-SIM<br>VIDEO: FHD<br>WARRANTY: 24 MONTHS<br>', 'productimages/samsungA23/SM1-A235FZOVAFA.jpg', 'productimages/samsungA23/SM2-A235FZOVAFA-2.jpg', 'productimages/samsungA23/SM3-A235FZOVAFA-2.jpg', 11990, 'PS002', 15),
(1003, 'Samsung Galaxy ZFLIP 4 256GB ', 'BACK CAMERA: 12MP + 12MP<br>BATTERY: 3700 MAH<br>DISPLAY: 6.7\"<br>FRONT CAMERA: 10MP<br>MEMORY: 8GB<br>STORAGE: 256GBCPU: OCTACORE<br>NETWORK: 5G<br>COLOR: PURPLE<br>PROTECTION: IPX8 (ARMOR ALUMINIUM)<br>REFRESH RATE: (120HZ)<br>RESOLUTION: FHD+<br>SIM SIZE: NANO-SIM<br>VIDEO: 4K<br>WARRANTY: 24 MONTHS<br>', 'productimages/samsungFlip/SM1-F721BLVEAFA.jpg', 'productimages/samsungFlip/SM2-F721BLVEAFA.jpg', 'productimages/samsungFlip/SM3-F721BLVEAFA.jpg', 52990, 'PS003', 6),
(1004, 'Huawei Nova 10 256GB ', 'BACK CAMERA: 50MP + 8MP + 2MP<br>BATTERY: 4000MAH<br>DISPLAY: 6.67\'\'<br>FRONT CAMERA: 60MP<br>MEMORY: 8GB<br>STORAGE: 256GB<br>COLOR: STARRY BLACK<br>NETWORK: 4G<br>RESOLUTION: 2652*1200<br>SIM SIZE: NANO-SIM<br>VIDEO: 4K<br>WARRANTY: 24M<br>', 'productimages/huaweiNova10/NOVA110-BLK.jpg', 'productimages/huaweiNova10/NOVA210-BLK-1.jpg', 'productimages/huaweiNova10/NOVA310-BLK-2.jpg', 25990, 'PH001', 10),
(1005, 'Huawei P50 Pocket PE Gold', 'CAMERA: 50/64/40+13MP MP<br>FLASH: LED<br>ZOOM: 50/64/40+13MP MP<br>PROCESSOR: Octa-core GHz<br>BATTERY CAPACITY (mA.h): 4360<br>INTERNAL MEMORY: 256GB<br>RAM (MB): 8GB<br>TECH RADIO: 4G+<br>SIM CARD: Nano<br>SCREEN RESOLUTION: 1228 x 2700 pixels<br>SCREEN PPI: ~450 ppi<br>', 'productimages/huaweiP50/P50POCKETPE1.jpg', 'productimages/huaweiP50/P50POCKETPE2.jpg', 'productimages/huaweiP50/P50POCKETPE3.jpg', 52999, 'PH002', 6),
(1006, 'Huawei Nova Y61 64GB ', 'BACK CAMERA: 50MP + 2MP + 2MP<br>BATTERY: 5000MAH<br>DISPLAY: 6.5\'\', HD+<br>FRONT CAMERA: 5MP<br>MEMORY: 4GB<br>STORAGE: 64GB<br>COLOR: MINT BLUE<br>CPU: OCTA-CORE<br>NETWORK: LTE CAT 5/11<br>PROTECTION: SIDE MOUNTED FINGERPRINT<br>\r\nRESOLUTION: 1600*720<br>SIM SIZE: DUAL NANO SIM<br>WARRANTY: 24M<br>', 'productimages\\huaweiY61\\NOVA1Y61-GRN.jpg', 'productimages\\huaweiY61\\NOVA2Y61-GRN-1.jpg', 'productimages\\huaweiY61\\NOVA3Y61-GRN-2.jpg', 74990, 'PH003', 15),
(1007, 'Apple IPHONE14 512GB STAR', 'BACK CAMERA: 12MP + 12MP<br>BATTERY: 3279 MAH<br>DISPLAY: 6.1\"<br>FRONT CAMERA: 12MP<br>MEMORY: 6GB<br>STORAGE: 512GB<br>COLOR: STARLIGHT<br>NETWORK: 5G<br>REFRESH RATE: 60Hz<br>RESOLUTION: 2532*1170<br>SIM SIZE: NANO-SIM<br>VIDEO: 4K<br>WARRANTY: 12M<br>', 'productimages/iphone14/IPHONE14512-STAR1.jpg', 'productimages/iphone14/IPHONE14512-STAR2.jpg', 'productimages/iphone14/IPHONE14512-STAR3.jpg', 72990, 'PI001', 13),
(1008, 'Apple IPHONE13 PRO MAX 128GB', 'BACK CAMERA: 12MP + 12MP + 12 MP + TOF 3D LIDAR<br>BATTERY: 4352 MAH<br>CPU: HEXA-CORE<br>DISPLAY: 6.7\"<br>FRONT CAMERA: 12MP<br>\r\nSTORAGE: 128GB<br>MEMORY: 6GB<br>NETWORK: 5G<br>PROTECTION: IP68 | GORILLA GLASS (FRONT + BACK)<br>REFRESH RATE: 120HZ<br>RESOLUTION: QHD<br>SIM SIZE: NANO-SIM<br>VIDEO: 4K<br>WARRANTY: 12 MONTHS<br>', 'productimages/iphone13pro/IPHONE13-PM-128-GRN - 1.jpg', 'productimages/iphone13pro/IPHONE13-PM-128-GRN-2.jpg', 'productimages/iphone13pro/IPHONE13-PM-128-GRN3.jpg', 69990, 'PI002', 6),
(1009, 'Apple IPHONE SE 256GB ', 'BACK CAMERA: 13MP<br>BATTERY: 1821 MAH<br>CPU: HEXA-CORE<br>DISPLAY: 4.7\"<br>FRONT CAMERA: 7MP<br>STORAGE: 256GB<br>MEMORY: 3GB<br>NETWORK: 4G<br>PROTECTION: IP67<br>RESOLUTION: HD+<br>SIM SIZE: NANO-SIM<br>VIDEO: 4k<br>WARRANTY: 12 MONTHS<br>', 'productimages/iphoneSE/IPHONESE256-MID-1.jpg', 'productimages/iphoneSE/IPHONESE256-MID-2.jpg', 'productimages/iphoneSE/IPHONESE256-MID-3.jpg', 35990, 'PI003', 10),
(1010, 'Apple Wireless Earphones Airpods PRO', 'AUTONOMY: 4.5 hours<br>BLUETOOTH VERSION: V5.0<br>DRIVER SIZE: Apple driver<br>CONNECTIVITY TECHNOLOGY: Wireless<br>WEIGHT: Airpods Pro (each) 0.19 ounce (5.3 g)<br>', 'productimages/AirpodsPro/AIRPODSPRO-SC1.jpg', 'productimages/AirpodsPro/AIRPODSPRO-SC2.jpg', 'productimages/AirpodsPro/AIRPODSPROSC3.jpg', 15490, 'EA001', 12),
(1011, 'Belkin Wireless Earphones Black', 'AUTONOMY: 10 HOURS<br>NOISE CANCELLATION: Yes<br>OTHER FEATURE: SMART ADAPTIVE NOISECANCELLATION<br>PROTECTION: WATERPROOF<br>BLUETOOTH VERSION: V5.2<br>DRIVER SIZE: 11MM<br>TRUE WIRELESS: Yes<br>WARRANTY: 12 MONTHS<br>', 'productimages/belkinearphone/AUC002GLBK1.jpg', 'productimages/belkinearphone/AUC002GLBK2.jpg', 'productimages/belkinearphone/AUC002GLBK3.jpg', 4590, 'EB001', 6),
(1012, 'JBL Wireless Earphones Blue', 'AUTONOMY: 6 HOURS<br>OTHER FEATURE: AMBIENT AWARE FEATURE<br>PROTECTION: SWEATPROOF<br>BLUETOOTH VERSION: V5.0<br>DRIVER SIZE: 5.6MM<br>TRUE WIRELESS: Yes<br>WARRANTY: 12 MONTHS<br>', 'productimages/jblearphone/JBLLIVE300TWSBLU1.jpg', 'productimages/jblearphone/JBLLIVE300TWSBLU2.jpg', 'productimages/jblearphone/JBLLIVE300TWSBLU3.jpg', 4990, 'EJ001', 5),
(1013, 'HAVIT Gaming Headphones', 'Use: Portable Media Player, Mobile Phone, COMPUTER, Gaming<br>Active Noise-Cancellation: NO<br>Cord Length: 2.2m<br>Waterproof Standard: IPX 0<br>Volume Control: Yes<br>Speaker: 50mm<br>Game atmosphere light: Multicolor<br>Battery Indicator: LED<br>', 'productimages/havitheadphonepink/H2233D-PINK1.jpg', 'productimages/havitheadphonepink/H2233D-PINK-2.jpg', 'productimages/havitheadphonepink/H2233D-PINK-3.jpg', 1290, 'HH001', 3),
(1014, 'JBL Headphones Quantum ', 'Driver size (mm): 50<br>Passive Frequency Response: 20 Hz - 40 kHz<br>Active Frequency Response: 20 Hz - 20 kHz<br>Weight (g): 420<br>Weight (oz): 14.8<br>Charging Cable Length (m): 2<br>Bluetooth version: 5.2<br>Charging time (hours from empty): 2<br>', 'productimages/jblHeadphoneQuantum/JBLQUANTUM200BLK-1.jpg', 'productimages/jblHeadphoneQuantum/JBLQUANTUM200BLK-2.jpg', 'productimages/jblHeadphoneQuantum/JBLQUANTUM200BLK-3.jpg', 2790, 'HJ001', 4),
(1015, 'Logitech Wireless Headset', 'Headset<br>\r\nHeight: 183.0 mm<br>\r\nWidth: 169.7 mm<br>\r\nDepth: 73 mm<br>\r\nWeight: 185 g<br>\r\nEar pad<br>\r\nHeight: 98.6 mm<br>\r\nWidth: 75.4 mm<br>\r\nDepth: 19.3 mm<br>', 'productimages/logitechHeadset/H151-1.jpg', 'productimages/logitechHeadset/H151-2.jpg', 'productimages/logitechHeadset/H151-3.jpg', 690, 'HL001', 4),
(1016, 'Anker PowerPort', '6 USB ports<br>60W output<br>PowerIQ technology<br>', 'productimages/AnkerPowerport/51A3Cw2FD5L._AC_SX6791.jpg', 'productimages/AnkerPowerport/61e+m7EuK9L._AC_SX6793.jpg', 'productimages/AnkerPowerport/61J1CoPabWL._AC_SX6792.jpg', 1899, 'CA001', 3),
(1017, 'Belkin BoostCharge', '30W output<br>USB-C port<br>Compact design<br>', 'productimages/belkinboostcharge/138342968_WIZ017-WHT_3in1WirelessChargingDock_Hero_WEB1.png', 'productimages/belkinboostcharge/130226866_WIZ017-WHT_MagSafe_BoostChargePro_3in1WirelessChargeDock_Hero_NoDevice_WEB2.png', 'productimages/belkinboostcharge/130226340_WIZ017-WHT_MagSafe_BoostChargePro_3in1WirelessChargeDock_Side_WDevice_WEB3.png', 1499, 'CB001', 4),
(1018, 'Havit Wireless Charger', 'Product Type: WIRELESS CAR CHARGER<br>15W INFRARED INDUCTION<br>INPUT : 12V/1.67A OR 9V/1.67A OR 5V/2A<br>COMPATIBLE WITH 10W 7.5W AND 5W<br>', 'productimages/havitwirelesscharger/W3000-BLK1.jpg', 'productimages/havitwirelesscharger/W3000-BLK2.jpg', 'productimages/havitwirelesscharger/W3000-BLK3.jpg', 495, 'CH001', 3),
(1019, 'Body Glove Screenguard', 'Screen Protector<br>Eligible for Cash on Delivery<br>12-Month Limited Warranty<br>Easy To Apply: Yes<br>5 layers of protection<br>Bubble free<br>Resists deep scratches', 'productimages/bodyglove.jpg', 'productimages/bodyglove.jpg', 'productimages/bodyglove.jpg', 590, 'OB001', 15),
(1020, 'Samsung Cover Case Galaxy ZFLIP4', 'Ring, Protective Phone Case with Finger Loop<br>Product Dimensions: 6.67 x 3.02 x 0.42 inches<br>Item Weight: 2.08 ounces<br>Manufacturer: SAMSUNG', 'productimages/coverzflip.jpg', 'productimages/coverzflip.jpg', 'productimages/coverzflip.jpg', 2190, 'OC001', 4),
(1021, 'Samsung Cover Case Galaxy A53', 'Cover Case<br>Durable: Yes<br>Recycled Content Certification<br>Slender form<br>Silky smooth and stylish<br>', 'productimages/coverA53.jpg', 'productimages/coverA53.jpg', 'productimages/coverA53.jpg', 490, 'OC002', 5),
(1022, 'Sony CP-V10A/BC Power Bank', 'Capacity: 10000mAh<br>Output Ports:1 USB-A<br>Input Ports: Micro-USB<br>Fast Charging: No<br>Weight:245g', 'productimages/powerbanksony/powerbanksony1.jpg', 'productimages/powerbanksony/powerbanksony1.jpg', 'productimages/powerbanksony/powerbanksony1.jpg', 2500, 'CP001', 6),
(1023, 'PowerCore Slim 10000 PD', '10000mAh<br>Portable Charger<br>USB-C<br>Power Delivery (18W)<br>Power Bank for iPhone 8/8+/X/XS/XR/XS Max, Samsung Galaxy S10, Pixel 3/3XL, iPad Pro 2018, and More', 'productimages/powercore/Black-01_3078x1.jpg', 'productimages/powercore/black02.jpg', 'productimages/powercore/black02.jpg', 1500, 'CP002', 2),
(1024, 'BoostUp Belkin Charger', 'Wireless Charging Pad 5W<br>Specs:<br>(1) Diameter: 95.5mm or 3.76\"<br>(2) Height: 11mm or 0.43\"<br>Weight: 64 grams or 2.26oz', 'productimages/boostupcharger/boostup1.png', 'productimages/boostupcharger/boostup1.png', 'productimages/boostupcharger/boostup1.png', 899, 'CB002', 2),
(1025, 'Mi Selfie Stick Tripod', 'Specifications:<br>Connection:Bluetooth 4.0 Remote Control<br>Extension Size:Up to 51cm<br> Rotatable Angle: Up to 270 degree<br>Style: Monopod<br>Remote Control: Last up to 8 hours<br>\r\nMicro USB Charging', 'productimages/selfiestick/selfie1.jpg', 'productimages/selfiestick/selfie2.jpg', 'productimages/selfiestick/selfie3.jpg', 850, 'OSS01', 4),
(1026, 'Befree GT XPRO Aluminium Tripod', 'Weight: 2 kg<br>Maximum Height: 164 cm<br> Warranty: 2 years + 8 year extension<br>Closed Length: 43 cm<br>Head Type: Ball Head<br>Safety Payload UNI/PdR 105:2021<br>Maximum Height (With Center Column Down) 142 cm', 'productimages/tripod/tripod1.jpg', 'productimages/tripod/tripod2.jpg', 'productimages/tripod/tripod3.jpg', 6590, 'OT001', 5),
(1027, 'Godox LR-120B LED Ring Light', 'Diameter: 12 inches<br>Number of LEDs: 240<br>Color Temperature: 3300K-5600K<br>Power Source: AC<br>	Mounting Type: Tabletop', 'productimages/ringlight/ring1.jpg', 'productimages/ringlight/ring2.jpg', 'productimages/ringlight/ring3.jpg', 2800, 'OR001', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1028;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
