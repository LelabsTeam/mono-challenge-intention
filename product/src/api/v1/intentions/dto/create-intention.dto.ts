import { IsString, IsNumber, IsNotEmpty, IsOptional, ValidateNested } from 'class-validator';
import { Type } from 'class-transformer';

class Address {
    @IsString()
    @IsNotEmpty()
    street: string;

    @IsString()
    @IsNotEmpty()
    number: string;

    @IsString()
    @IsNotEmpty()
    postcode: string;

    @IsString()
    @IsOptional()
    complement: string;
}

class Product {
    @IsNumber()
    @IsNotEmpty()
    id: number;

    @IsString()
    @IsNotEmpty()
    title: string;

    @IsNumber()
    @IsNotEmpty()
    price: number;

    @IsString()
    @IsNotEmpty()
    category: string;

    @IsString()
    @IsNotEmpty()
    description: string;

    @IsString()
    @IsNotEmpty()
    image: string;
}

export class CreateIntentionDto {
    @ValidateNested({ each: true })
    @Type(() => Address)
    @IsNotEmpty()
    address: Address[];

    @ValidateNested({ each: true })
    @Type(() => Product)
    @IsNotEmpty()
    products: Product[];

    @IsString()
    @IsNotEmpty()
    token: string
}