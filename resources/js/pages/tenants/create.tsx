import { Form, Head } from '@inertiajs/react';
import Heading from '@/components/heading';
import InputError from '@/components/input-error';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import AppLayout from '@/layouts/app-layout';
import type { BreadcrumbItem } from '@/types';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Create tenant',
        href: '/tenants/create',
    },
];

export default function CreateTenant() {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Create tenant" />

            <div className="p-4">
                <div className="max-w-2xl rounded-xl border border-sidebar-border/70 bg-card p-6 shadow-sm">
                    <Heading
                        title="Create a new tenant"
                        description="Pick a tenant name and a subdomain slug. You'll become the owner automatically."
                    />

                    <Form action="/tenants" method="post" className="space-y-6">
                        {({ processing, errors }) => (
                            <>
                                <div className="grid gap-2">
                                    <Label htmlFor="name">Tenant name</Label>
                                    <Input
                                        id="name"
                                        name="name"
                                        required
                                        autoFocus
                                        placeholder="Acme Inc"
                                    />
                                    <InputError message={errors.name} />
                                </div>

                                <div className="grid gap-2">
                                    <Label htmlFor="slug">Tenant slug</Label>
                                    <Input
                                        id="slug"
                                        name="slug"
                                        required
                                        placeholder="acme"
                                    />
                                    <p className="text-xs text-muted-foreground">
                                        Allowed: lowercase letters, numbers and hyphens.
                                    </p>
                                    <InputError message={errors.slug} />
                                </div>

                                <Button type="submit" disabled={processing}>
                                    Create tenant
                                </Button>
                            </>
                        )}
                    </Form>
                </div>
            </div>
        </AppLayout>
    );
}
