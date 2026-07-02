<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\AdminUser;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Admin User
        AdminUser::create([
            'name'     => 'Admin',
            'email'    => 'admin@agronet.com',
            'password' => Hash::make('admin@123'),
        ]);

        // Categories
        $categories = [
            [
                'name'        => 'Agriculture Shade Net',
                'slug'        => 'agriculture-shade-net',
                'description' => 'High-density polyethylene shade nets designed for crop protection, temperature regulation, and UV filtration in open field and greenhouse farming.',
                'image'       => null,
                'is_active'   => true,
                'sort_order'  => 1,
            ],
            [
                'name'        => 'Construction Safety Net',
                'slug'        => 'construction-safety-net',
                'description' => 'Heavy-duty HDPE nets used at construction sites to contain debris, ensure worker safety, and prevent accidental falling of objects.',
                'image'       => null,
                'is_active'   => true,
                'sort_order'  => 2,
            ],
            [
                'name'        => 'Greenhouse Net',
                'slug'        => 'greenhouse-net',
                'description' => 'Precision-woven nets that maintain optimal humidity, light, and temperature levels inside greenhouse structures for year-round cultivation.',
                'image'       => null,
                'is_active'   => true,
                'sort_order'  => 3,
            ],
            [
                'name'        => 'Poultry Net',
                'slug'        => 'poultry-net',
                'description' => 'Ventilated HDPE nets for poultry farms, providing shade, air circulation, and protection from predators and harsh weather conditions.',
                'image'       => null,
                'is_active'   => true,
                'sort_order'  => 4,
            ],
            [
                'name'        => 'Bird Protection Net',
                'slug'        => 'bird-protection-net',
                'description' => 'Fine-mesh nets deployed over orchards, vineyards, and open farms to prevent bird damage to crops during harvesting seasons.',
                'image'       => null,
                'is_active'   => true,
                'sort_order'  => 5,
            ],
            [
                'name'        => 'HDPE Woven Fabric',
                'slug'        => 'hdpe-woven-fabric',
                'description' => 'Industrial-grade woven HDPE fabric for ground cover, weed suppression, moisture retention, and soil erosion control.',
                'image'       => null,
                'is_active'   => true,
                'sort_order'  => 6,
            ],
        ];

        foreach ($categories as $cat) {
            Category::create($cat);
        }

        // Products
        $products = [
            [
                'category_id'       => 1,
                'name'              => '35% Green Shade Net',
                'slug'              => '35-percent-green-shade-net',
                'short_description' => 'Lightweight shade net providing 35% sun blockage, suitable for nurseries, vegetable crops, and flower cultivation.',
                'description'       => 'The 35% Green Shade Net is manufactured from virgin HDPE monofilament yarn with UV stabilizers. It offers moderate shading ideal for crops that require partial sunlight. The flat-woven design allows optimal airflow while filtering excess solar radiation. It is widely used in tomato, capsicum, and leafy vegetable farming. The net is resistant to mildew, rot, and chemical deterioration.',
                'specifications'    => [
                    'Shade Percentage' => '35%',
                    'Width Available'  => '1m, 2m, 3m, 4m, 6m',
                    'Length'           => '50m, 100m per roll',
                    'GSM'              => '45 - 50 GSM',
                    'Material'         => '100% Virgin HDPE',
                    'UV Stabilization' => 'Yes - 3 to 5 years',
                    'Color'            => 'Green',
                ],
                'shade_percentage'  => '35%',
                'width'             => '1m to 6m',
                'gsm'               => '45-50 GSM',
                'images'            => [],
                'is_featured'       => true,
                'is_active'         => true,
                'sort_order'        => 1,
            ],
            [
                'category_id'       => 1,
                'name'              => '50% Green Shade Net',
                'slug'              => '50-percent-green-shade-net',
                'short_description' => 'Medium shade net with 50% blockage for mango, papaya, and tropical crop protection against harsh afternoon sun.',
                'description'       => 'The 50% Green Shade Net is the most popular choice among commercial farmers. It is engineered to block half the incoming solar radiation while maintaining sufficient light for plant photosynthesis. The double-needle edge binding prevents fraying and extends the lifespan of the net. It is ideal for permanent farm structures and poly house installations.',
                'specifications'    => [
                    'Shade Percentage' => '50%',
                    'Width Available'  => '2m, 3m, 4m, 6m, 8m',
                    'Length'           => '50m, 100m per roll',
                    'GSM'              => '60 - 65 GSM',
                    'Material'         => '100% Virgin HDPE',
                    'UV Stabilization' => 'Yes - 5 years',
                    'Color'            => 'Green',
                ],
                'shade_percentage'  => '50%',
                'width'             => '2m to 8m',
                'gsm'               => '60-65 GSM',
                'images'            => [],
                'is_featured'       => true,
                'is_active'         => true,
                'sort_order'        => 2,
            ],
            [
                'category_id'       => 1,
                'name'              => '75% Green Shade Net',
                'slug'              => '75-percent-green-shade-net',
                'short_description' => 'High-density shade net with 75% blockage for ornamental plants, nurseries, and areas with intense sunlight exposure.',
                'description'       => 'The 75% Green Shade Net delivers heavy shading for plants that cannot tolerate direct sunlight. It is commonly used for anthurium, fern, and exotic plant nurseries. The reinforced border and eyelets allow easy installation on both temporary and permanent support structures. Heavy GSM construction ensures durability in high-wind environments.',
                'specifications'    => [
                    'Shade Percentage' => '75%',
                    'Width Available'  => '2m, 3m, 4m, 6m',
                    'Length'           => '50m, 100m per roll',
                    'GSM'              => '75 - 80 GSM',
                    'Material'         => '100% Virgin HDPE',
                    'UV Stabilization' => 'Yes - 5 years',
                    'Color'            => 'Green / Black',
                ],
                'shade_percentage'  => '75%',
                'width'             => '2m to 6m',
                'gsm'               => '75-80 GSM',
                'images'            => [],
                'is_featured'       => true,
                'is_active'         => true,
                'sort_order'        => 3,
            ],
            [
                'category_id'       => 2,
                'name'              => 'Construction Debris Safety Net',
                'slug'              => 'construction-debris-safety-net',
                'short_description' => 'HDPE safety net for building sites to prevent debris fall and protect workers and public from hazardous materials.',
                'description'       => 'Our Construction Debris Safety Net is manufactured to meet international safety standards for building and infrastructure projects. The reinforced mesh structure absorbs impact and prevents loose materials from falling during construction activities. It is fire-retardant treated and available in standard green for site-standard compliance.',
                'specifications'    => [
                    'Mesh Size'    => '10mm x 10mm',
                    'Width'        => '2m, 3m, 4m',
                    'Length'       => '50m per roll',
                    'GSM'          => '100 - 120 GSM',
                    'Material'     => 'HDPE with Fire Retardant',
                    'Tensile Load' => '1500 N/m minimum',
                    'Color'        => 'Green / Orange',
                ],
                'shade_percentage'  => 'N/A',
                'width'             => '2m to 4m',
                'gsm'               => '100-120 GSM',
                'images'            => [],
                'is_featured'       => true,
                'is_active'         => true,
                'sort_order'        => 1,
            ],
            [
                'category_id'       => 3,
                'name'              => 'Greenhouse Poly Net 40%',
                'slug'              => 'greenhouse-poly-net-40-percent',
                'short_description' => 'Precision-woven poly net for greenhouse side walls and roofing, offering 40% shade with maximum ventilation.',
                'description'       => 'The Greenhouse Poly Net is designed specifically for poly house and protected cultivation structures. The open weave design facilitates cross-ventilation and prevents excessive humidity buildup inside the greenhouse. It is available in custom widths to fit standard greenhouse bays without joins.',
                'specifications'    => [
                    'Shade Percentage' => '40%',
                    'Width Available'  => 'Custom up to 12m',
                    'Length'           => 'As required',
                    'GSM'              => '55 GSM',
                    'Material'         => 'HDPE Monofilament',
                    'UV Life'          => '5 - 7 years',
                    'Color'            => 'White / Green',
                ],
                'shade_percentage'  => '40%',
                'width'             => 'Up to 12m custom',
                'gsm'               => '55 GSM',
                'images'            => [],
                'is_featured'       => false,
                'is_active'         => true,
                'sort_order'        => 1,
            ],
            [
                'category_id'       => 4,
                'name'              => 'Poultry Farm Shade Net',
                'slug'              => 'poultry-farm-shade-net',
                'short_description' => 'High-ventilation shade net for broiler and layer poultry houses to regulate heat stress and improve bird productivity.',
                'description'       => 'Designed in consultation with poultry industry standards, this net provides the ideal thermal environment for broiler and layer birds. The open-weave structure ensures air movement to prevent heat stress, a primary cause of mortality in intensive poultry operations. The light-diffusing property maintains uniform light distribution across the poultry shed.',
                'specifications'    => [
                    'Shade Percentage' => '30% to 50%',
                    'Width Available'  => '3m, 4m, 6m',
                    'Length'           => '50m, 100m per roll',
                    'GSM'              => '50 - 60 GSM',
                    'Material'         => 'Virgin HDPE',
                    'UV Life'          => '4 - 5 years',
                    'Color'            => 'Green / White',
                ],
                'shade_percentage'  => '30-50%',
                'width'             => '3m to 6m',
                'gsm'               => '50-60 GSM',
                'images'            => [],
                'is_featured'       => true,
                'is_active'         => true,
                'sort_order'        => 1,
            ],
            [
                'category_id'       => 5,
                'name'              => 'Anti-Bird Protection Mesh',
                'slug'              => 'anti-bird-protection-mesh',
                'short_description' => 'Heavy-duty anti-bird netting for orchards, vineyards, and agricultural fields.',
                'description'       => 'Our Anti-Bird Protection Netting is the perfect solution for shielding precious crops, orchards, and vineyards from birds and other animal pests. Made from high-tensile strength UV-stabilized HDPE, this net is lightweight yet extremely robust. It features a lock-stitch knit pattern to prevent tearing, and allows optimal sunlight and moisture penetration.',
                'specifications'    => [
                    'Mesh Size'    => '15mm x 15mm',
                    'Width Available'  => '2m, 3m, 4m, 6m',
                    'Length'           => '50m, 100m per roll',
                    'GSM'              => '35 GSM',
                    'Material'         => '100% Virgin HDPE',
                    'UV Life'          => '5 years',
                    'Color'            => 'Black / Green',
                ],
                'shade_percentage'  => 'N/A',
                'width'             => '2m to 6m',
                'gsm'               => '35 GSM',
                'images'            => [],
                'is_featured'       => true,
                'is_active'         => true,
                'sort_order'        => 1,
            ],
            [
                'category_id'       => 6,
                'name'              => 'HDPE Woven Ground Cover Fabric',
                'slug'              => 'hdpe-woven-ground-cover-fabric',
                'short_description' => 'Premium weed barrier ground cover fabric for nurseries and greenhouses.',
                'description'       => 'Our HDPE Woven Ground Cover Fabric is an excellent choice for weed suppression, moisture retention, and soil stabilization in greenhouse rows, nurseries, and outdoor cultivation fields. Woven with high-strength polypropylene and UV inhibitors, it resists tearing, puncturing, and rot, ensuring a clean and long-lasting layout.',
                'specifications'    => [
                    'Weight'           => '100 GSM',
                    'Width Available'  => '1m, 1.5m, 2m, 3m',
                    'Length'           => '50m, 100m per roll',
                    'GSM'              => '100 GSM',
                    'Material'         => 'Woven HDPE',
                    'UV Life'          => '3 to 5 years',
                    'Color'            => 'Black with grid lines',
                ],
                'shade_percentage'  => 'N/A',
                'width'             => '1m to 3m',
                'gsm'               => '100 GSM',
                'images'            => [],
                'is_featured'       => true,
                'is_active'         => true,
                'sort_order'        => 1,
            ],
        ];

        foreach ($products as $prod) {
            Product::create($prod);
        }
    }
}
