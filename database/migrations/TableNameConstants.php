<?php

/**
 * Created by PhpStorm.
 * User: Hash
 * Date: 11-01-2016
 * Time: 21:22
 */
class TableNameConstants
{
    //Tables to be used and modified by CN Team
    const CN_COLLEGES = "cn_colleges";
    const CN_DOMAINS = "cn_domains";
    const CN_STREAMS = "cn_streams";
    const CN_BUCKETS = "cn_buckets";
    const CN_MODULES = "cn_modules";
    const CN_PERMISSIONS = "cn_permissions";
    const CN_ROLES = "cn_roles";
    const CN_COLLEGE_TENANTS = "college_tenants";
    const CN_USERS = "cn_users";
    const CN_MODULE_SUBSCRIPTION = "cn_module_subscriptions";
    const CN_PERMISSION_ROLE_PIVOT = "cn_permission_cn_role";

    //Tables to be used and modified by the client users
    const USERS = "users";
    const COLLEGE_DEPARTMENTS = "college_departments";
    const PASSWORD_RESETS = "password_resets";
    const FAILED_JOBS = "failed_jobs";
    const ACCESS_TOKENS = "access_tokens";
    const EVENTS = "events";
    const MEETING_INVITES = "meeting_invites";
    const MESSAGES = "messages";
    const NEWS = "news";
    const CONNECT_REQUESTS = "connect_requests";
    const USER_ACHEIVEMENTS = "user_acheivements";
    const CURRENT_AFFAIRS = "current_affairs";
    const IMAGE_URLS = "image_urls";
    const CONTACT_FAVOURITES = "contact_favourites";
    const CONTACT_GROUPS = "contact_groups";
    const PUSH_REGISTRATION_TOKENS = "push_registration_tokens";
    const COLLEGE_TENANTS_DOMAINS_PIVOT = "cn_domain_college_tenant";
}