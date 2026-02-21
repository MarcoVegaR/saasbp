import { Link, usePage } from '@inertiajs/react';
import { Check, ChevronDown, Plus } from 'lucide-react';
import { Badge } from '@/components/ui/badge';
import { Button } from '@/components/ui/button';
import {
    DropdownMenu,
    DropdownMenuContent,
    DropdownMenuGroup,
    DropdownMenuItem,
    DropdownMenuLabel,
    DropdownMenuSeparator,
    DropdownMenuTrigger,
} from '@/components/ui/dropdown-menu';
import type { TenancySharedData } from '@/types';

export function TenantSwitcher() {
    const { tenancy } = usePage().props as {
        tenancy?: TenancySharedData;
    };

    const userTenants = tenancy?.userTenants ?? [];
    const currentTenantId = tenancy?.currentTenantId ?? null;
    const currentTenant =
        userTenants.find((tenant) => tenant.id === currentTenantId) ??
        userTenants[0] ??
        null;

    if (currentTenant === null) {
        return (
            <Button variant="outline" size="sm" asChild>
                <Link href="/tenants/create" prefetch>
                    <Plus className="size-4" />
                    Create tenant
                </Link>
            </Button>
        );
    }

    return (
        <DropdownMenu>
            <DropdownMenuTrigger asChild>
                <Button variant="outline" size="sm" className="gap-2">
                    <span className="max-w-40 truncate">{currentTenant.name}</span>
                    <ChevronDown className="size-4 opacity-70" />
                </Button>
            </DropdownMenuTrigger>
            <DropdownMenuContent align="end" className="w-72">
                <DropdownMenuLabel className="text-xs font-medium uppercase tracking-wide text-muted-foreground">
                    Switch tenant
                </DropdownMenuLabel>
                <DropdownMenuSeparator />
                <DropdownMenuGroup>
                    {userTenants.map((tenant) => (
                        <DropdownMenuItem key={tenant.id} asChild>
                            <Link
                                href={`/tenants/${tenant.id}/switch`}
                                method="post"
                                as="button"
                                className="flex w-full items-center justify-between gap-3"
                            >
                                <div className="flex min-w-0 flex-col items-start text-left">
                                    <span className="truncate text-sm font-medium">
                                        {tenant.name}
                                    </span>
                                    <span className="truncate text-xs text-muted-foreground">
                                        {tenant.domain ?? tenant.slug}
                                    </span>
                                </div>

                                <div className="flex items-center gap-2">
                                    <Badge variant="outline" className="capitalize">
                                        {tenant.role}
                                    </Badge>
                                    {tenant.id === currentTenant.id && (
                                        <Check className="size-4 text-primary" />
                                    )}
                                </div>
                            </Link>
                        </DropdownMenuItem>
                    ))}
                </DropdownMenuGroup>

                <DropdownMenuSeparator />

                <DropdownMenuItem asChild>
                    <Link href="/tenants/create" prefetch>
                        <Plus className="size-4" />
                        Create new tenant
                    </Link>
                </DropdownMenuItem>
            </DropdownMenuContent>
        </DropdownMenu>
    );
}
