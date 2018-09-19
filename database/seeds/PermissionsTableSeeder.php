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
                'name' => 'view-dashboard',
                'display_name' => 'View Dashboard',
            ],
            [
                'name' => 'create-user',
                'display_name' => 'Create User',
            ],
            [
                'name' => 'read-user',
                'display_name' => 'Read User',
            ],
            [
                'name' => 'update-user',
                'display_name' => 'Update User',
            ],
            [
                'name' => 'delete-user',
                'display_name' => 'Delete User',
            ],
            [
                'name' => 'create-role',
                'display_name' => 'Create Role',
            ],
            [
                'name' => 'read-role',
                'display_name' => 'Read Role',
            ],
            [
                'name' => 'update-role',
                'display_name' => 'Update Role',
            ],
            [
                'name' => 'delete-role',
                'display_name' => 'Delete Role',
            ],
            [
                'name' => 'create-permission',
                'display_name' => 'Create Permission',
            ],
            [
                'name' => 'read-permission',
                'display_name' => 'Read Permission',
            ],
            [
                'name' => 'update-permission',
                'display_name' => 'Update Permission',
            ],
            [
                'name' => 'delete-permission',
                'display_name' => 'Delete Permission',
            ],
            [
                'name' => 'create-category',
                'display_name' => 'Create Category',
            ],
            [
                'name' => 'read-category',
                'display_name' => 'Read Category',
            ],
            [
                'name' => 'update-category',
                'display_name' => 'Update Category',
            ],
            [
                'name' => 'delete-category',
                'display_name' => 'Delete Category',
            ],
            [
                'name' => 'create-tag',
                'display_name' => 'Create Tag',
            ],
            [
                'name' => 'read-tag',
                'display_name' => 'Read Tag',
            ],
            [
                'name' => 'update-tag',
                'display_name' => 'Update Tag',
            ],
            [
                'name' => 'delete-tag',
                'display_name' => 'Delete Tag',
            ],
            [
                'name' => 'create-media',
                'display_name' => 'Create Media',
            ],
            [
                'name' => 'read-media',
                'display_name' => 'Read Media',
            ],
            [
                'name' => 'update-media',
                'display_name' => 'Update Media',
            ],
            [
                'name' => 'delete-media',
                'display_name' => 'Delete Media',
            ],
            [
                'name' => 'create-product',
                'display_name' => 'Create Product',
            ],
            [
                'name' => 'read-product',
                'display_name' => 'Read Product',
            ],
            [
                'name' => 'update-product',
                'display_name' => 'Update Product',
            ],
            [
                'name' => 'delete-product',
                'display_name' => 'Delete Product',
            ],
            [
                'name' => 'create-brand',
                'display_name' => 'Create Brand',
            ],
            [
                'name' => 'read-brand',
                'display_name' => 'Read Brand',
            ],
            [
                'name' => 'update-brand',
                'display_name' => 'Update Brand',
            ],
            [
                'name' => 'delete-brand',
                'display_name' => 'Delete Brand',
            ],
            [
                'name' => 'create-shop',
                'display_name' => 'Create Shop',
            ],
            [
                'name' => 'read-shop',
                'display_name' => 'Read Shop',
            ],
            [
                'name' => 'update-shop',
                'display_name' => 'Update Shop',
            ],
            [
                'name' => 'delete-shop',
                'display_name' => 'Delete Shop',
            ],
            [
                'name' => 'create-comment',
                'display_name' => 'Create Comment',
            ],
            [
                'name' => 'read-comment',
                'display_name' => 'Read Comment',
            ],
            [
                'name' => 'update-comment',
                'display_name' => 'Update Comment',
            ],
            [
                'name' => 'delete-comment',
                'display_name' => 'Delete Comment',
            ],
            [
                'name' => 'create-order',
                'display_name' => 'Create Order',
            ],
            [
                'name' => 'read-order',
                'display_name' => 'Read Order',
            ],
            [
                'name' => 'update-order',
                'display_name' => 'Update Order',
            ],
            [
                'name' => 'delete-order',
                'display_name' => 'Delete Order',
            ],
            [
                'name' => 'create-invoice',
                'display_name' => 'Create Invoice',
            ],
            [
                'name' => 'read-invoice',
                'display_name' => 'Read Invoice',
            ],
            [
                'name' => 'update-invoice',
                'display_name' => 'Update Invoice',
            ],
            [
                'name' => 'delete-invoice',
                'display_name' => 'Delete Invoice',
            ],
            [
                'name' => 'create-rating',
                'display_name' => 'Create Rating',
            ],
            [
                'name' => 'read-rating',
                'display_name' => 'Read Rating',
            ],
            [
                'name' => 'update-rating',
                'display_name' => 'Update Rating',
            ],
            [
                'name' => 'delete-rating',
                'display_name' => 'Delete Rating',
            ],
            [
                'name' => 'create-offer',
                'display_name' => 'Create Offer',
            ],
            [
                'name' => 'read-offer',
                'display_name' => 'Read Offer',
            ],
            [
                'name' => 'update-offer',
                'display_name' => 'Update Offer',
            ],
            [
                'name' => 'delete-offer',
                'display_name' => 'Delete Offer',
            ],
            [
                'name' => 'create-country',
                'display_name' => 'Create Country',
            ],
            [
                'name' => 'read-country',
                'display_name' => 'Read Country',
            ],
            [
                'name' => 'update-country',
                'display_name' => 'Update Country',
            ],
            [
                'name' => 'delete-country',
                'display_name' => 'Delete Country',
            ],
            [
                'name' => 'create-division',
                'display_name' => 'Create Division',
            ],
            [
                'name' => 'read-division',
                'display_name' => 'Read Division',
            ],
            [
                'name' => 'update-division',
                'display_name' => 'Update Division',
            ],
            [
                'name' => 'delete-division',
                'display_name' => 'Delete Division',
            ],
            [
                'name' => 'create-district',
                'display_name' => 'Create District',
            ],
            [
                'name' => 'read-district',
                'display_name' => 'Read District',
            ],
            [
                'name' => 'update-district',
                'display_name' => 'Update District',
            ],
            [
                'name' => 'delete-district',
                'display_name' => 'Delete District',
            ],
            [
                'name' => 'create-thana',
                'display_name' => 'Create Thana',
            ],
            [
                'name' => 'read-thana',
                'display_name' => 'Read Thana',
            ],
            [
                'name' => 'update-thana',
                'display_name' => 'Update Thana',
            ],
            [
                'name' => 'delete-thana',
                'display_name' => 'Delete Thana',
            ]
        ]);
    }
}
