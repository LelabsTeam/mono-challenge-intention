import { ApiProperty } from '@nestjs/swagger';

export class AuthorizationDto {
  @ApiProperty({ example: 'your-token-value' })
  token: string;
}