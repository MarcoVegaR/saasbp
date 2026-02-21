import type { Auth } from '@/types/auth';
import type { TenancySharedData } from '@/types/tenancy';

declare module '@inertiajs/core' {
    export interface InertiaConfig {
        sharedPageProps: {
            name: string;
            features: {
                mfa: boolean;
            };
            auth: Auth;
            tenancy: TenancySharedData;
            sidebarOpen: boolean;
            [key: string]: unknown;
        };
    }
}
