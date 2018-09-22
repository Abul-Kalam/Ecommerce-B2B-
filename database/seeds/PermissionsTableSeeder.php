<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'id'           => 1,
                'name' => 'view-dashboard',
                'display_name' => 'View Dashboard',
            ],
            [
                'id'           => 2,
                'name' => 'create-user',
                'display_name' => 'Create User',
            ],
            [
                'id'           => 3,
                'name' => 'read-user',
                'display_name' => 'Read User',
            ],
            [
                'id'           => 4,
                'name' => 'update-user',
                'display_name' => 'Update User',
            ],
            [
                'id'           => 5,
                'name' => 'delete-user',
                'display_name' => 'Delete User',
            ],
            [
                'id'           => 6,
                'name' => 'create-role',
                'display_name' => 'Create Role',
            ],
            [
                'id'           => 7,
                'name' => 'read-role',
                'display_name' => 'Read Role',
            ],
            [
                'id'           => 8,
                'name' => 'update-role',
                'display_name' => 'Update Role',
            ],
            [
                'id'           => 9,
                'name' => 'delete-role',
                'display_name' => 'Delete Role',
            ],
            [
                'id'           => 10,
                'name' => 'create-permission',
                'display_name' => 'Create Permission',
            ],
            [
                'id'           => 11,
                'name' => 'read-permission',
                'display_name' => 'Read Permission',
            ],
            [
                'id'           => 12,
                'name' => 'update-permission',
                'display_name' => 'Update Permission',
            ],
            [
                'id'           => 13,
                'name' => 'delete-permission',
                'display_name' => 'Delete Permission',
            ],
            [
                'id'           => 14,
                'name' => 'create-category',
                'display_name' => 'Create Category',
            ],
            [
                'id'           => 15,
                'name' => 'read-category',
                'display_name' => 'Read Category',
            ],
            [
                'id'           => 16,
                'name' => 'update-category',
                'display_name' => 'Update Category',
            ],
            [
                'id'           => 17,
                'name' => 'delete-category',
                'display_name' => 'Delete Category',
            ],
            [
                'id'           => 18,
                'name' => 'create-tag',
                'display_name' => 'Create Tag',
            ],
            [
                'id'           => 19,
                'name' => 'read-tag',
                'display_name' => 'Read Tag',
            ],
            [
                'id'           => 20,
                'name' => 'update-tag',
                'display_name' => 'Update Tag',
            ],
            [
                'id'           => 21,
                'name' => 'delete-tag',
                'display_name' => 'Delete Tag',
            ],
            [
                'id'           => 22,
                'name' => 'create-media',
                'display_name' => 'Create Media',
            ],
            [
                'id'           => 23,
                'name' => 'read-media',
                'display_name' => 'Read Media',
            ],
            [
                'id'           => 24,
                'name' => 'update-media',
                'display_name' => 'Update Media',
            ],
            [
                'id'           => 25,
                'name' => 'delete-media',
                'display_name' => 'Delete Media',
            ],
            [
                'id'           => 26,
                'name' => 'create-product',
                'display_name' => 'Create Product',
            ],
            [
                'id'           => 27,
                'name' => 'read-product',
                'display_name' => 'Read Product',
            ],
            [
                'id'           => 28,
                'name' => 'update-product',
                'display_name' => 'Update Product',
            ],
            [
                'id'           => 29,
                'name' => 'delete-product',
                'display_name' => 'Delete Product',
            ],
            [
                'id'           => 30,
                'name' => 'create-brand',
                'display_name' => 'Create Brand',
            ],
            [
                'id'           => 31,
                'name' => 'read-brand',
                'display_name' => 'Read Brand',
            ],
            [
                'id'           => 32,
                'name' => 'update-brand',
                'display_name' => 'Update Brand',
            ],
            [
                'id'           => 33,
                'name' => 'delete-brand',
                'display_name' => 'Delete Brand',
            ],
            [
                'id'           => 34,
                'name' => 'create-shop',
                'display_name' => 'Create Shop',
            ],
            [
                'id'           => 35,
                'name' => 'read-shop',
                'display_name' => 'Read Shop',
            ],
            [
                'id'           => 36,
                'name' => 'update-shop',
                'display_name' => 'Update Shop',
            ],
            [
                'id'           => 37,
                'name' => 'delete-shop',
                'display_name' => 'Delete Shop',
            ],
            [
                'id'           => 38,
                'name' => 'create-comment',
                'display_name' => 'Create Comment',
            ],
            [
                'id'           => 39,
                'name' => 'read-comment',
                'display_name' => 'Read Comment',
            ],
            [
                'id'           => 40,
                'name' => 'update-comment',
                'display_name' => 'Update Comment',
            ],
            [
                'id'           => 41,
                'name' => 'delete-comment',
                'display_name' => 'Delete Comment',
            ],
            [
                'id'           => 42,
                'name' => 'create-order',
                'display_name' => 'Create Order',
            ],
            [
                'id'           => 43,
                'name' => 'read-order',
                'display_name' => 'Read Order',
            ],
            [
                'id'           => 44,
                'name' => 'update-order',
                'display_name' => 'Update Order',
            ],
            [
                'id'           => 45,
                'name' => 'delete-order',
                'display_name' => 'Delete Order',
            ],
            [
                'id'           => 46,
                'name' => 'create-invoice',
                'display_name' => 'Create Invoice',
            ],
            [
                'id'           => 47,
                'name' => 'read-invoice',
                'display_name' => 'Read Invoice',
            ],
            [
                'id'           => 48,
                'name' => 'update-invoice',
                'display_name' => 'Update Invoice',
            ],
            [
                'id'           => 49,
                'name' => 'delete-invoice',
                'display_name' => 'Delete Invoice',
            ],
            [
                'id'           => 50,
                'name' => 'create-rating',
                'display_name' => 'Create Rating',
            ],
            [
                'id'           => 51,
                'name' => 'read-rating',
                'display_name' => 'Read Rating',
            ],
            [
                'id'           => 52,
                'name' => 'update-rating',
                'display_name' => 'Update Rating',
            ],
            [
                'id'           => 53,
                'name' => 'delete-rating',
                'display_name' => 'Delete Rating',
            ],
            [
                'id'           => 54,
                'name' => 'create-offer',
                'display_name' => 'Create Offer',
            ],
            [
                'id'           => 55,
                'name' => 'read-offer',
                'display_name' => 'Read Offer',
            ],
            [
                'id'           => 56,
                'name' => 'update-offer',
                'display_name' => 'Update Offer',
            ],
            [
                'id'           => 57,
                'name' => 'delete-offer',
                'display_name' => 'Delete Offer',
            ],
            [
                'id'           => 58,
                'name' => 'create-country',
                'display_name' => 'Create Country',
            ],
            [
                'id'           => 59,
                'name' => 'read-country',
                'display_name' => 'Read Country',
            ],
            [
                'id'           => 60,
                'name' => 'update-country',
                'display_name' => 'Update Country',
            ],
            [
                'id'           => 61,
                'name' => 'delete-country',
                'display_name' => 'Delete Country',
            ],
            [
                'id'           => 62,
                'name' => 'create-division',
                'display_name' => 'Create Division',
            ],
            [
                'id'           => 63,
                'name' => 'read-division',
                'display_name' => 'Read Division',
            ],
            [
                'id'           => 64,
                'name' => 'update-division',
                'display_name' => 'Update Division',
            ],
            [
                'id'           => 65,
                'name' => 'delete-division',
                'display_name' => 'Delete Division',
            ],
            [
                'id'           => 66,
                'name' => 'create-district',
                'display_name' => 'Create District',
            ],
            [
                'id'           => 67,
                'name' => 'read-district',
                'display_name' => 'Read District',
            ],
            [
                'id'           => 68,
                'name' => 'update-district',
                'display_name' => 'Update District',
            ],
            [
                'id'           => 69,
                'name' => 'delete-district',
                'display_name' => 'Delete District',
            ],
            [
                'id'           => 70,
                'name' => 'create-thana',
                'display_name' => 'Create Thana',
            ],
            [
                'id'           => 71,
                'name' => 'read-thana',
                'display_name' => 'Read Thana',
            ],
            [
                'id'           => 72,
                'name' => 'update-thana',
                'display_name' => 'Update Thana',
            ],
            [
                'id'           => 73,
                'name' => 'delete-thana',
                'display_name' => 'Delete Thana',
            ]
        ]);
    }
}
