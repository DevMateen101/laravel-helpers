<?php

namespace AbdullahMateen\LaravelHelpingMaterial\Enums\User;

use AbdullahMateen\LaravelHelpingMaterial\Interfaces\ColorsInterface;
use AbdullahMateen\LaravelHelpingMaterial\Traits\General\Enum\GeneralTrait;

enum RoleEnum: int implements ColorsInterface
{
    use GeneralTrait;

    case Developer = 1000;
    case SuperAdmin = 1001;
    case Admin = 3001;
    case Staff = 5001;
    case Customer = 7001;

    public const ROLE_DEVELOPER   = 'Developer';
    public const ROLE_SUPER_ADMIN = 'Super Admin';
    public const ROLE_ADMIN       = 'Admin';
    public const ROLE_STAFF       = 'Staff';
    public const ROLE_CUSTOMER    = 'Customer';

    /**
     * @return RoleEnum[]
     */
    public static function admins(): array
    {
        return [
            self::Developer,
            self::SuperAdmin,
            self::Admin,
        ];
    }

    /**
     * @param string $name
     *
     * @return RoleEnum
     */
    public static function fromName(string $name): RoleEnum
    {
        return match ($name) {
            'Developer'  => self::Developer,
            'SuperAdmin' => self::SuperAdmin,
            'Admin'      => self::Admin,
            'Staff'      => self::Staff,
            'Customer'   => self::Customer,
        };
    }

    /**
     * @param string $role
     *
     * @return RoleEnum
     */
    public static function fromRole(string $role): RoleEnum
    {
        return match ($role) {
            self::ROLE_DEVELOPER   => self::Developer,
            self::ROLE_SUPER_ADMIN => self::SuperAdmin,
            self::ROLE_ADMIN       => self::Admin,
            self::ROLE_STAFF       => self::Staff,
            self::ROLE_CUSTOMER    => self::Customer,
        };
    }

    /**
     * @return string
     */
    public function role(): string
    {
        return $this->toString();
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return match ($this) {
            self::Developer  => self::ROLE_DEVELOPER,
            self::SuperAdmin => self::ROLE_SUPER_ADMIN,
            self::Admin      => self::ROLE_ADMIN,
            self::Staff      => self::ROLE_STAFF,
            self::Customer   => self::ROLE_CUSTOMER,
        };
    }

    /**
     * @return string
     */
    public function color(): string
    {
        return match ($this) {
            self::Developer  => self::FIREBRICK1_CLASS,
            self::SuperAdmin => self::DANGER_CLASS,
            self::Admin      => self::WARNING_CLASS,
            self::Staff      => self::YELLOW_CLASS,
            self::Customer   => self::PRIMARY_CLASS,
        };
    }

}
