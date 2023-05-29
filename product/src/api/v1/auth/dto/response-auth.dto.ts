import { IsString, IsNumber, IsNotEmpty, IsOptional, ValidateNested } from 'class-validator';
import { Type } from 'class-transformer';

class Content {
   message: string;
   token: string;
}

export class LoginResponseDto {
    @ValidateNested({ each: true })
    @Type(() => Content)
    content: Content;
}
