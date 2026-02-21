export type UserTenant = {
    id: string;
    name: string;
    slug: string;
    role: string;
    domain: string | null;
};

export type TenancySharedData = {
    userTenants: UserTenant[];
    currentTenantId: string | null;
};
